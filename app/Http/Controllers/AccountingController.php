<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\accounting;

class AccountingController extends Controller
{
    //

    public function add_account(Request $request)
    {
        $product = new accounting();
        $product->account_type=$request->account_type;
        $product->detail_type=$request->detail_type;
        $product->name=$request->name;
        $product->discription=$request->discription;
        $product->default_tax_code=$request->default_tax_code;
        $product->balance=$request->balance;
        $product->as_of=$request->as_of;
       
        

        $product->save();

         // return $product;
        
        return redirect('employee');
    }
}
