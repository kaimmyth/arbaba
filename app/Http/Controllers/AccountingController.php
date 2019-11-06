<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Validator;
use App\accounting;
use Session;
use Validator;


class AccountingController extends Controller
{
    public function view_accounting()
    {
        $toReturn=array();
        $toReturn=accounting::get()->toArray();

       
        $data['content'] = 'accounting.accounting';
        return view('layouts.content', compact('data'))->with('toReturn', $toReturn);
    }


    public function add_account(Request $request)
    {
        // return $request->hidden_input_purpose;
        $this->validate($request,['name'=>'required|name']);

        $product = new accounting();
        $product->account_type=$request->account_type;
        $product->detail_type=$request->detail_type;
        $product->name=$request->name;
        $product->discription=$request->discription;
        $product->default_tax_code=$request->default_tax_code;
        $product->balance=$request->balance;
        $product->as_of=$request->as_of;

         // return $product;
        if($request->hidden_input_purpose=="edit")
        {
            $update_values_array = json_decode(json_encode($product), true);
            $update_query = accounting::where('id', $request->hidden_input_id)->update($update_values_array);
            Session::flash('success', 'Acount details has been updated successfully');
        }
        else if($request->hidden_input_purpose=="add")
        {
            $product->save();
            Session::flash('success', 'Account details has been saved successfully');
        }
       
        
        return redirect('accounting');

    }
     public function delete_account($id=""){


        $del=accounting::where('id',$id)->delete();
        Session::flash('success', 'Products details has been deleted successfully');
        return redirect('accounting');
    }

     public function get_account_details($id=""){
        $data = accounting::where('id', $id)->first();
        return $data;
    }

}
