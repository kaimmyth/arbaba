<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expenses_customer;
use App\expenses;
use App\expenses_supplier;
use Session;

class ExpensesController extends Controller
{
    // expenses home
    public function index()
    {
        $toReturn=array();
        $toReturn=expenses::orderBy('id', 'desc')->get()->toArray();

        $data['content'] = 'expenses.expenses';
        return view('layouts.content', compact('data'))->with('return', $toReturn);
    }

    // add edit expenses
    public function add_edit_expenses(Request $Request)
    { 
        
        $expenses = new expenses();
        $expenses->payee_id = $Request->expenses_payee_id;
        $expenses->payment_account = $Request->expenses_payment_account;
        $expenses->payment_date = date("Y-m-d", strtotime($Request->expenses_payment_date));
        $expenses->payment_method = $Request->expenses_payment_method;
        $expenses->ref_no = $Request->expenses_ref_no;
        $expenses->memo = $Request->expenses_memo;

        // for attachment
        $expenses->attachment = "";
        if($Request->hasFile('expenses_attachment'))
        {
            //
            $file = $Request->file('expenses_attachment');

            $expenses->attachment = $file->getClientOriginalName();
            $destinationPath = 'public/images';
            $file->move($destinationPath, $file->getClientOriginalName()); 
        }
        else{
            if($Request->hidden_input_purpose=="edit")
            {
                $expenses->attachment = $Request->hidden_input_attachment;
            }
            else if($Request->hidden_input_purpose=="add")
            {
                // error has to return
            }
        }

        $count = count($Request->expenses_details_tax_category);
        $tmp=""; //$expenses->expenses_details;
        if($count>1){
            for($i=0;$i<$count;$i++){
                $tmp.=$Request->expenses_details_tax_category[$i].",";
                $tmp.=$Request->expenses_details_description[$i].",";
                $tmp.=$Request->expenses_details_amount[$i].",";
                $tmp.=$Request->expenses_details_tax[$i].":";
            }
        }
        else{
            $tmp.=$Request->expenses_details_tax_category[0].",";
            $tmp.=$Request->expenses_details_description[0].",";
            $tmp.=$Request->expenses_details_amount[0].",";
            $tmp.=$Request->expenses_details_tax[0];
        }
        $expenses->expenses_details=rtrim($tmp, ':');
        
        // finall query create, edit
        if($Request->hidden_input_purpose=="edit")
        {
            $update_values_array = json_decode(json_encode($expenses), true);
            $update_query = expenses::where('id', $Request->hidden_input_id)->update($update_values_array);
            Session::flash('success', 'Expenses details has been updated successfully');
        }
        else if($Request->hidden_input_purpose=="add")
        {
            $expenses->save();
            Session::flash('success', 'Expenses details has been saved successfully');
        }
        
        return redirect('expenses');
    }

    // delete expenses
    public function delete_expenses($id="")
    {
        $del=expenses::where('id',$id)->delete();
        Session::flash('success', 'Expenses details has been deleted successfully');
        return redirect('expenses');
    }

    // get expenses details in json format (i.e ajax)
    public function get_expenses_details($id=""){
        // $toReturn = expenses::select( 'id', 'payee_id')->where('id', $id)->get();
        $data = expenses::where('id', $id)->first();

        // for expenses_details
        $no_of_rows=0;
        $tax_category=[];
        $description=[];
        $amount=[];
        $tax_percent=[];
        $tax=[];
        $subtotal=0;
        $total_tax=0;
        $total=0;

        if($data->expenses_details!="")
        {
            $tmp = $data->expenses_details;
            $tmp = explode(":",$tmp);
            for($i=0;$i<count($tmp);$i++){
                $tmp_2 = explode(",",$tmp[$i]);
                $tax_category[$i]=$tmp_2[0];
                $description[$i]=$tmp_2[1];
                $amount[$i]=$tmp_2[2];
                $tax_percent[$i]=$tmp_2[3];
                $tax[$i]=($tmp_2[2]*$tmp_2[3])/100;
                $subtotal+=$amount[$i];
                $total_tax+=$tax[$i];
                $total+=($amount[$i]+$tax[$i]);
            }
            $no_of_rows=count($tmp);
        }
        $data->no_of_rows=$no_of_rows;
        $data->expenses_details_tax_category=$tax_category;
        $data->expenses_details_description=$description;
        $data->expenses_details_amount=$amount;
        $data->expenses_details_tax_percent=$tax_percent;
        $data->expenses_details_tax=$tax;
        $data->subtotal=$subtotal;
        $data->total_tax=$total_tax;
        $data->total=$total;

        // change date format for font end
        $data->payment_date = date("d-m-Y", strtotime($data->payment_date));

        return $data;
    }

    // expenses/ suppliers home
    public function suppliers_index(){
        $toReturn=array();
        $toReturn=expenses_supplier::orderBy('id', 'desc')->get()->toArray();
        
        $data['content'] ='expenses.suppliers';
	    return view('layouts.content',compact('data'))->with('return', $toReturn);
    }

    // suppliers insert
    public function add_edit_suppliers(Request $request){
        $supplier= new expenses_supplier();
        $supplier->title=$request->title;
        $supplier->first_name=$request->first_name;
        $supplier->email_id=$request->email_id;
        $supplier->mobile_no=$request->mobile_no;
        $supplier->last_name=$request->last_name;
        $supplier->middle_name=$request->middle_name;
        $supplier->company_name=$request->company_name;
        $supplier->other=$request->other;   
        $supplier->company=$request->company;
        $supplier->display_name_as=$request->title." ".$request->first_name;
        $supplier->website=$request->website;
        $supplier->billing_rate=$request->billing_rate;
        $supplier->address=$request->address;
        $supplier->city=$request->city;
        $supplier->state=$request->state;
        $supplier->pin_code=$request->pin_code;
        $supplier->country=$request->country;
        $supplier->pan_no=$request->pan_no;
        $supplier->terms=$request->terms;
        $supplier->opening_balance=$request->opening_balance;
        $supplier->as_of=date("Y-m-d",strtotime($request->as_of));
        $supplier->account_no=$request->account_no;
        $supplier->gst_reg_type=$request->gst_reg_type;
        $supplier->gstin=$request->gstin;
        $supplier->tax_reg_no=$request->tax_reg_no;

        $supplier->effective_date=date("Y-m-d",strtotime($request->effective_date));;
        $supplier->notes=$request->notes;

        // for attachment
        $supplier->attachment = "";
        if($request->hasFile('attachment'))
        {
            //
            $file = $request->file('attachment');

            $supplier->attachment = $file->getClientOriginalName();
            $destinationPath = 'public/images';
            $file->move($destinationPath, $file->getClientOriginalName()); 
        }
        else{
            if($request->hidden_input_purpose=="edit")
            {
                $supplier->attachment = $request->hidden_input_attachment;
            }
            else if($request->hidden_input_purpose=="add")
            {
                // error has to return
            }
        }
       

        // finall query create, edit
        if($request->hidden_input_purpose=="edit")
        {
            $update_values_array = json_decode(json_encode($supplier), true);
            $update_query = expenses_supplier::where('id', $request->hidden_input_id)->update($update_values_array);
            Session::flash('success', 'Supplier details has been updated successfully');
        }
        else if($request->hidden_input_purpose=="add")
        {
            $supplier->save();
            Session::flash('success', 'Supplier details has been saved successfully');
        }
        
        return redirect('expenses/suppliers');
    }

    // suppliers delete
    public function delete_suppliers($id=""){
        $del=expenses_supplier::where('id',$id)->delete();
        Session::flash('success', 'Deleted Successfully');
        return redirect('expenses/suppliers');
    }

    // get suplliers details
    public function get_suppliers_details($id=""){
        $data = expenses_supplier::where('id', $id)->first();
        $data->as_of = date("d-m-Y", strtotime($data->as_of));
        $data->effective_date = date("d-m-Y", strtotime($data->effective_date));
        return $data;
    }
}
  
