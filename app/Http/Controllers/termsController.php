<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\terms;

class termsController extends Controller
{
   
    
    public function view_terms()
    {
        $toReturn=array();
        $toReturn=terms::get()->toArray();
        $data['content'] ='terms';
	    return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
    }
    
    public function add_new_terms(Request $request)
    {
        $employee = new terms();
        $employee->terms = $request->new_terms;
        $employee->save();
       
        return redirect('tools-master/terms');
    }
    
  
    public function  update(Request $Request)
    {
        $update_about=terms::where('id',$Request->terms_id)->update(array(
            'terms'=>$Request->terms_terms
           
        ));
        return redirect('tools-master/terms');
    }

    public function delete_expenses($id="")
    {
        $del=terms::where('id',$id)->delete();
        return redirect('tools-master/terms');
    }

   
}
