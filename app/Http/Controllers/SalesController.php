<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ats_sales_invoice;
use App\Ats_products_and_services;
use App\Ats_sales_customers;
use Mail;

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

        $toReturn=array();
        $toReturn=Ats_sales_invoice::orderBy('id','asc')->get()->toArray();

        $data['content'] ='sale.invoice';
        return view('layouts.content',compact('data'))->with('toReturn', $toReturn);
    }

    public function insert_invoice(Request $request)
    {
       
        //return $request;
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
                $tmp.=$request->qty[$i]*$request->rate[$i].",";
                $tmp.=$request->tax[$i].":";
            }
        }
        else{
               
                $tmp.=$request->product_service[0].",";
                $tmp.=$request->hsn_sac[0].",";
                $tmp.=$request->description[0].",";
                $tmp.=$request->qty[0].",";
                $tmp.=$request->rate[0].",";
                $tmp.=$request->qty[0]*$request->rate[0].",";
                $tmp.=$request->tax[0];
        }
        $invoice->invoice_details =rtrim($tmp, ':');

      

      //  return $tmp;
   $invoice->save();
     
         return redirect('sale/invoice');
    }

    public function add_customers(Request $request)
    {
        $product = new Ats_sales_customers();
        $product->title=$request->title;
        $product->first_name=$request->first_name;
        $product->last_name=$request->last_name;
        $product->email_id=$request->email_id;
        $product->company=$request->company;
        $product->phone_no=$request->phone_no;
        $product->mobile_no=$request->mobile_no;
        $product->fax=$request->fax;
        $product->display_name_as =$request->display_name_as;
        $product->other=$request->other;
        $product->website=$request->website;
        $product->gst_reg_type =$request->gst_reg_type;
        $product->gst_in=$request->gst_in;
        // $product->enter_parent_customer=$request->enter_parent_customer;
        $product->bill_with_partner=$request->bill_with_partner;
        $product->billing_address=$request->billing_address;
        $product->city_town=$request->city_town;
        $product->state=$request->state;
        $product->pin_code=$request->pin_code;
        $product->country=$request->country;
        $product->shipping_address=$request->shipping_address;
        $product->city_town_shipping=$request->city_town_shipping;
        $product->state_shipping=$request->state_shipping;
        $product->pin_code_shipping=$request->pin_code_shipping;
        $product->country_shipping=$request->country_shipping;
        $product->notes=$request->notes;
        $product->tax_reg_no=$request->tax_reg_no;
        $product->cst_reg_no=$request->cst_reg_no;
        $product->pan_no=$request->pan_no;
        $product->preferred_payment_method=$request->preferred_payment_method;
        $product->preferred_delivery_method=$request->preferred_delivery_method;
        $product->terms=$request->terms;
        $product->opening_balance=$request->opening_balance;
        $product->as_of=$request->as_of;
        $product->attachment="NA";
        

        $product->save();

         // return $product;
        
        return redirect('sale/customers');
    }
   

    public function view_customers()
    {
        $toReturn=array();
        $toReturn=Ats_sales_customers::get()->toArray();

        $data['content'] ='sale.customer';
        return view('layouts.content',compact('data'))->with('toReturn', $toReturn);
    }

    public function view_products_and_services()
    {
        $toReturn=array();
        $toReturn=Ats_products_and_services::get()->toArray();

        //return $toReturn;
        $data['content'] = 'sale.products-services';
        return view('layouts.content', compact('data'))->with('toReturn', $toReturn);
    }

    public function add_products_and_services(Request $request)
    {
        $products = new Ats_products_and_services();
        $products->name=$request->name;
        $products->sku=$request->sku;
        $products->hsn_code=$request->hsn_code;
        $products->sac_code=$request->sac_code;
        $products->unit=$request->unit;
        $products->category=$request->category;
        $products->sale_price=$request->sale_price;
        $products->income_acount=$request->income_acount;
        $products->inclusive_tax =$request->inclusive_tax;
        $products->tax=$request->tax;
        $products->description=$request->description;
        $products->purchasing_information =$request->purchasing_information;
        $products->cost=$request->cost;
        $products->expense_account=$request->expense_account;
        $products->purchase_tax=$request->purchase_tax;
        $products->reverse_change=$request->reverse_change;
        $products->preferred_supplier=$request->preferred_supplier;

        $products->save();
        
        return redirect('sale/products&services');

 }

    public function delete_products_and_services($id=""){


        $del=Ats_products_and_services::where('id',$id)->delete();
        return redirect('sale/products&services');
    }

    public function invoice_mail($id="")
    {
        $toReturn=array();
        $toReturn=Ats_sales_invoice::where('id',$id)->get()->toArray();
    //  return $toReturn;
        // Mail::send('emails.sales_invoice_mail',['toReturn'=>$toReturn[0]],function($message)use($toReturn){
        //     $message->to($toReturn[0]['customer_email'])
        //             ->subject('Tax Invoice');
        //     $message->from('tax_invoice@arbaba.com','AR BABA');
        // });
        
        return view('emails.sales_invoice_mail')->with('toReturn',$toReturn);
        
       
        //return view('emails.sales_invoice_mail')->with('toReturn',$toReturn);
    }
}
