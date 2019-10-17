<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index()
    {
        $data['content'] = 'expenses.expenses';
        return view('layouts.content', compact('data'));
    }
}
  
