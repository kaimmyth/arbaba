<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Its_expenses_customer;

class ExpensesController extends Controller
{
    public function index()
    {
        $data['content'] = 'expenses.expenses';
        return view('layouts.content', compact('data'));
    }
    public function view_customer()
    {
            $data['content'] ='Expenses.customer';
	return view('layouts.content',compact('data'));
    }
    public function expenses_customer_insert(Request $request)
    {
    
        $customer= new Its_expenses_customer();
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








    }
}
  
