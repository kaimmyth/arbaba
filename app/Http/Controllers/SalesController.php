<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ats_sales_invoice;

class SalesController extends Controller
{
    //All Sales
    public function view_all_sales()
    {
            $data['content'] ='sale.allsale';
            return view('layouts.content',compact('data'));
       
    }

   
    public function view_invoices()
    {
        $data['content'] ='sale.invoice';
        	return view('layouts.content',compact('data'));
    }

    public function insert_invoice(Request $request)
    {
        $invoice = new Ats_sales_invoice();
        $invoice->invoice_no=$request->invoice_no;
        $invoice->customer =$request->customer ; 
        $invoice->customer_email=$request->customer_email; 
        $invoice->billing_address =$request->billing_address ; 
        $invoice->terms = $request->terms ; 
        $invoice->invoice_date=date("Y-m-d",strtotime($request->invoice_date));
        $invoice->due_date=date("Y-m-d",strtotime($request->due_date));

        // $invoice->invoice_date =$request->invoice_date ; 
        // $invoice->due_date =$request->due_date ; 
        $invoice->place_of_supply =$request->place_of_supply ; 
        $invoice->msg_on_invoice = $request->msg_on_invoice; 
        $invoice->msg_on_statement=$request->msg_on_statement;
        if($request->hasFile('attachment'))
        {
            $file = $request->file('attachment');

            $invoice->attachment = $file->getClientOriginalName();
            $destinationPath = 'public/images/sales';
            $file->move($destinationPath, $file->getClientOriginalName());
        }
        else{
            $invoice->attachment = "";
        } 


        $count = count($request->product_service);
        $tmp=""; 
        if($count>1){
            for($i=0;$i<$count;$i++){
                
                $tmp.=$request->product_service[$i].",";
                $tmp.=$request->hsn_sac[$i].",";
                $tmp.=$request->description[$i].",";
                $tmp.=$request->qty[$i].",";
                $tmp.=$request->rate[$i].",";
                $tmp.=$request->amt[$i].",";
                $tmp.=$request->tax[$i].":";
            }
        }
        else{
               
                $tmp.=$request->product_service[0].",";
                $tmp.=$request->hsn_sac[0].",";
                $tmp.=$request->description[0].",";
                $tmp.=$request->qty[0].",";
                $tmp.=$request->rate[0].",";
                $tmp.=$request->amt[0].",";
                $tmp.=$request->tax[0];
        }
        $invoice->invoice_details =rtrim($tmp, ':');


   $invoice->save();
     
  return redirect('sale/invoice');
    }


    public function view_customers()
    {
        $data['content'] ='sale.customer';
		return view('layouts.content',compact('data'));
    }

    public function view_products_and_services()
    {
        $data['content'] ='sale.products-services';
        return view('layouts.content',compact('data'));
    }
}
