<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
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
