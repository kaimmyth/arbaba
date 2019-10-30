<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sales_invoice;
use App\products_and_services;
use App\sales_customers;
use Mail;
use Session;

class SalesController extends Controller
{
    //All Sales
    public function view_all_sales()
    {
        $toReturn=array();
        $toReturn=sales_invoice::orderBy('id','asc')->get()->toArray();

       
        

        $data['content'] ='sale.allsale';
        return view('layouts.content',compact('data'))->with(compact('toReturn',$toReturn));
       
    }

   
    public function view_invoices()
    {

        $toReturn=array();
        $toReturn=sales_invoice::orderBy('id','asc')->get()->toArray();

        $data['content'] ='sale.invoice';
        return view('layouts.content',compact('data'))->with('toReturn', $toReturn);
    }

    public function add_edit_invoice(Request $request)
    {
       
        //return $request;
        $invoice = new sales_invoice();
        $invoice->invoice_no=$request->invoice_no;
        $invoice->customer =$request->customer ; 
        $invoice->customer_email=$request->customer_email; 
        $invoice->billing_address =$request->billing_address ; 
        $invoice->terms = $request->terms ; 
        $invoice->invoice_date=date("Y-m-d",strtotime($request->invoice_date));
        $invoice->due_date=date("Y-m-d",strtotime($request->due_date));
        $invoice->place_of_supply =$request->place_of_supply ; 
        $invoice->msg_on_invoice = $request->msg_on_invoice; 
        $invoice->msg_on_statement=$request->msg_on_statement;
        $invoice->status=1;
        
        // for attachment
        $invoice->attachment = "";
        if($request->hasFile('attachment'))
        {
            //
            $file = $request->file('attachment');

            $invoice->attachment = $file->getClientOriginalName();
            $destinationPath = 'public/images';
            $file->move($destinationPath, $file->getClientOriginalName()); 
        }
        else{
            if($request->hidden_input_purpose=="edit")
            {
                $invoice->attachment = $request->hidden_input_attachment;
            }
            else if($request->hidden_input_purpose=="add")
            {
                // error has to return
            }
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

      
        // finall query create, edit
        if($request->hidden_input_purpose=="edit")
        {
            $update_values_array = json_decode(json_encode($invoice), true);
            $update_query = sales_invoice::where('id', $request->hidden_input_id)->update($update_values_array);
            Session::flash('success', 'Invoice details has been updated successfully');
        }
        else if($request->hidden_input_purpose=="add")
        {
            $invoice->save();
            Session::flash('success', 'Invoice details has been saved successfully');
        }
     
         return redirect('sale/invoice');
    }

    public function get_invoice_details($id=""){
        $data = sales_invoice::where('id', $id)->first();

        // for expenses_details
        $no_of_rows=0;
        $product_services=[];
        $hac_sac=[];
        $description=[];
        $qty=[];
        $rate=[];
        $amount=[];
        $tax=[];
        $subtotal=0;
        $total_tax=0;
        $total=0;

        if($data->invoice_details!="")
        {
            $tmp = $data->invoice_details;
            $tmp = explode(":",$tmp);
            for($i=0;$i<count($tmp);$i++){
                $tmp_2 = explode(",",$tmp[$i]);
                $product_services[$i]=$tmp_2[0];
                $hac_sac[$i]=$tmp_2[1];
                $description[$i]=$tmp_2[2];
                $qty[$i]=$tmp_2[3];
                $rate[$i]=$tmp_2[4];
                $amount[$i]=$tmp_2[5];
                $tax[$i]=$tmp_2[6];

                $subtotal+=$tmp_2[5];
                $total_tax+=(($tmp_2[5]*$tmp_2[6])/100);
                $total+=($subtotal+$total_tax);
            }
            $no_of_rows=count($tmp);
        }
        $data->no_of_rows=$no_of_rows;
        $data->invoice_details_product_services=$product_services;
        $data->invoice_details_hac_sac=$hac_sac;
        $data->invoice_details_description=$description;
        $data->invoice_details_qty=$qty;
        $data->invoice_details_rate=$rate;
        $data->invoice_details_amount=$amount;
        $data->invoice_details_tax=$tax;
        $data->subtotal=$subtotal;
        $data->total_tax=$total_tax;
        $data->total=$total;

        // change date format for font end
        $data->invoice_date = date("d-m-Y", strtotime($data->invoice_date));
        $data->due_date = date("d-m-Y", strtotime($data->due_date));

        return $data;
    }

    public function add_customers(Request $request)
    {
        $product = new sales_customers();
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
        $product->as_of=date("Y-m-d",strtotime($request->as_of));
        $product->attachment="NA";
        

        $product->save();

         // return $product;
        
        return redirect('sale/customers');
    }
   

    public function view_customers()
    {
    $toReturnInvoice=array();
    $toReturnInvoice=sales_invoice::get()->toArray();
    
    $toReturn=array();
    $toReturn=sales_customers::get()->toArray();
    
    $data['content'] ='sale.customer';
    return view('layouts.content',compact('data','product'))->with(compact('toReturn', 'toReturnInvoice'));
    }

    public function delete_customer($id="")
    {
        $del=sales_customers::where('id',$id)->delete();
        Session::flash('success', 'Products details has been deleted successfully');
      
        return redirect('sale/customers'); 
    }

    public function view_products_and_services()
    {
        $toReturn=array();
        $toReturn=products_and_services::get()->toArray();

       
        $data['content'] = 'sale.products-services';
        return view('layouts.content', compact('data'))->with('toReturn', $toReturn);
    }

    public function add_edit_products_and_services(Request $request)
    {
        $products = new products_and_services();
        $products->product_type=$request->product_type;
        $products->name=$request->name;
        $products->sku=$request->sku;
        $products->hsn_code=$request->hsn_code;
        $products->sac_code=$request->sac_code;
        $products->unit=$request->unit;
        $products->category=$request->category;
        $products->sale_price=$request->sale_price;
        $products->income_account=$request->income_account;
        $products->inclusive_tax =$request->inclusive_tax;
        $products->tax=$request->tax;
        $products->description=$request->description;
        $products->purchasing_information =$request->purchasing_information;
        $products->cost=$request->cost;
        $products->expense_account=$request->expense_account;
        $products->purchase_tax=$request->purchase_tax;
        $products->reverse_change=$request->reverse_change;
        $products->preferred_supplier=$request->preferred_supplier;

        // finall query create, edit
        if($request->hidden_input_purpose=="edit")
        {
            $update_values_array = json_decode(json_encode($products), true);
            $update_query = products_and_services::where('id', $request->hidden_input_id)->update($update_values_array);
            Session::flash('success', 'Products details has been updated successfully');
        }
        else if($request->hidden_input_purpose=="add")
        {
            $products->save();
            Session::flash('success', 'Products details has been saved successfully');
        }
        
        return redirect('sale/products-and-services');
    }

    public function delete_products_and_services($id=""){


        $del=products_and_services::where('id',$id)->delete();
        Session::flash('success', 'Products details has been deleted successfully');
        return redirect('sale/products-and-services');
    }

    public function get_products_and_services_details($id=""){
        $data = products_and_services::where('id', $id)->first();
        return $data;
    }

    public function invoice_mail($id="")
    {
        $toReturn=array();
        $toReturn=sales_invoice::where('id',$id)->get()->toArray();
   
        // Mail::send('emails.sales_invoice_mail',['toReturn'=>$toReturn[0]],function($message)use($toReturn){
        //     $message->to($toReturn[0]['customer_email'])
        //             ->subject('Tax Invoice');
        //     $message->from('tax_invoice@arbaba.com','AR BABA');
        // });
        Session::flash('success', 'Mail has been sent successfully');
        
        return view('emails.sales_invoice_mail')->with('toReturn',$toReturn);
        
       
        
    }
    public function print_invoice($id="")
    {
        $toReturn=array();
        $toReturn=sales_invoice::where('id',$id)->get()->toArray();
               
        return view('sales_invoice_print')->with('toReturn',$toReturn);
    }
    public function invoice_delivery_challan($id="")
    {
        $toReturn=array();
        $toReturn=sales_invoice::where('id',$id)->get()->toArray();
            
        return view('sales_invoice_delivery_challan')->with('toReturn',$toReturn);
    }

    public function invoice_delete($id="")
    {
        $toReturn=array();
        $toReturn=sales_invoice::where('id',$id)->delete();
            
        return redirect('sale/invoice')->with('toReturn',$toReturn);
    }

    public function invoice_remainder_email(Request $request)
    {
       
        // Mail::raw($request->message_text, function ($message) {
        //     $message->from('tax_invoice@arbaba.com','AR BABA');
        //     $message->to($request->reminder_recipient_email);
        //     $message->subject($request->subject);
        // });
        
      

        Session::flash('success', 'Reminder has been sent successfully');

        return redirect('sale/invoice');
    
    }
    
      
}
