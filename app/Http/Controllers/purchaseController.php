<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\vendor;

class purchaseController extends Controller
{


    //

     public function index()
    {
        $toReturn=array();
        $toReturn=vendor::orderBy('id', 'desc')->get()->toArray();
        $data['content'] ='purchases.vendor';
	    return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
    }

     public function add_edit_vendor(Request $request)
    {

        $vendor = new vendor();
        $vendor->title = $request->title;
        $vendor->first_name = $request->first_name;
        $vendor->last_name = $request->last_name;
        $vendor->company_name = $request->last_name;
        $vendor->vendor_email = $request->vendor_email;
        $vendor->phone = $request->phone;
        $vendor->mobile = $request->mobile;
        $vendor->skype_name = $request->skype_name;
        $vendor->designation = $request->designation;
        $vendor->department = $request->department;
        $vendor->website = $request->website;
        $vendor->currency = $request->currency;
        $vendor->opening_balance = $request->opening_balance;
        $vendor->payment_terms = $request->payment_terms;
        $vendor->billing_address = $request->billing_address;
        $vendor->billing_city_town = $request->billing_city_town;
        $vendor->billing_state = $request->billing_state;
        $vendor->billing_pin_code = $request->billing_pin_code;
        $vendor->billing_country = $request->billing_country;
        $vendor->shipping_address = $request->shipping_address;
        $vendor->shipping_city_town = $request->shipping_city_town;
        $vendor->shipping_state = $request->shipping_state;
        $vendor->shipping_pin_code = $request->shipping_pin_code;
        $vendor->shipping_country = $request->shipping_country;
        $vendor->contact_first_name = $request->contact_first_name;
        $vendor->contact_last_name = $request->contact_last_name;
        $vendor->contact_email = $request->contact_email;
        $vendor->contact_phone = $request->contact_phone;
        $vendor->contact_mobile = $request->contact_mobile;
        $vendor->remark = $request->remark; 
           // for attachment
        $vendor->attachment = "";
        if($request->hasFile('attachment'))
        {
            //
            $file = $request->file('attachment');

            $vendor->attachment = $file->getClientOriginalName();
            $destinationPath = 'public/images';
            $file->move($destinationPath, $file->getClientOriginalName());
        }
        else{
            if($request->hidden_input_purpose=="edit")
            {
                $vendor->attachment = $request->hidden_input_attachment;
            }
            else if($request->hidden_input_purpose=="add")
            {
                // error has to return
            }
        }

        // finall query create, edit
        if($request->hidden_input_purpose=="edit")
        {
            $update_values_array = json_decode(json_encode($vendor), true);
            $update_query = vendor::where('id', $request->hidden_input_id)->update($update_values_array);
        }
         else if($request->hidden_input_purpose=="add")
        {
            $vendor->save();
        }
        return redirect('purchases/vendor/');
    }

    // deletevendor
    public function delete_vendor($id="")
    {
        $del=vendor::where('id',$id)->delete();
        return redirect('purchases/vendor/');
    }
     // get employee details -> for -> view and edit -> in jquery ajax
    public function get_vendor_details($id=""){
        $data = vendor::where('id', $id)->first();
        
        return $data;
    }
}
