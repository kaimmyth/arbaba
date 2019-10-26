<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expenses_customer;
use App\expenses;

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
        }
        else if($Request->hidden_input_purpose=="add")
        {
            $expenses->save();
        }
        //return $expenses;
        
        return redirect('expenses');
    }

    // delete expenses
    public function delete_expenses($id="")
    {
        $del=expenses::where('id',$id)->delete();
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

    /* expenses/ customers -> it is deprecated/ has to remove
    public function view_customer()
    {
        $data['content'] ='Expenses.customer';
	    return view('layouts.content',compact('data'));
    }
    public function expenses_customer_insert(Request $request)
    {
    
        $customer= new expenses_customer();
        $customer->title=$request->title;
        $customer->last_name=$request->last_name;
        $customer->company=$request->company;
        $customer->first_name=$request->first_name;
        $customer->middle_name=$request->middle_name;        
        $customer->display_name_as=$request->title.$request->first_name;

       
        $customer->email_id=$request->email_id;
        $customer->company_name=$request->company_name;
        $customer->mobile_no=$request->mobile_no;
        $customer->phone_no=$request->phone_no;
       
        $customer->other=$request->other;
       
        $customer->website=$request->website;
       
        $customer->parent_customer=$request->parent_customer;
        $customer->bill_with=$request->bill_with;
        $customer->billing_address=$request->billing_address;
        $customer->billing_city=$request->billing_city;
        $customer->billing_state=$request->billing_state;
        $customer->billing_pin=$request->billing_pin;
        $customer->billing_country=$request->billing_country;
        $customer->shipping_address=$request->shipping_address;
        $customer->shipping_city=$request->shipping_city;
        $customer->shipping_state=$request->shipping_state;
        $customer->shipping_pin=$request->shipping_pin;
        $customer->shipping_country=$request->shipping_country;
        $customer->notes=$request->notes;
        $customer->tax_reg_no=$request->tax_reg_no;
        $customer->cst_reg_no=$request->cst_reg_no;
        $customer->pan_no=$request->pan_no;
        $customer->payment_method=$request->payment_method;
        $customer->delivery_method=$request->delivery_method;
        $customer->terms=$request->terms;
        $customer->opening_balance=$request->opening_balance;
        $customer->as_of=date("Y-m-d",strtotime($request->as_of));
        // $customer->attachment=$request->attachment;
        
        if($request->hasFile('attachment'))
        {
            $file = $request->file('attachment');

            $customer->attachment = $file->getClientOriginalName();
            $destinationPath = 'public/images';
            $file->move($destinationPath, $file->getClientOriginalName());
        }
        else{
            $customer->attachment = "";
        }
       
     
        
        $customer->save();
        
    //  return $request;
        return redirect('customer');
    }*/

    // expenses/ suppliers home
    public function suppliers_index(){
        $data['content'] ='expenses.suppliers';
	    return view('layouts.content',compact('data'));
    }

    // suppliers insert
    public function add_edit_suppliers(Request $request){

    }

    // suppliers delete
    public function delete_suppliers($id=""){

    }

    // get suplliers details
    public function get_suppliers_details($id=""){
        
    }
}
  
