<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;


class crudController extends Controller
{
    //

    public function show()
    {
        // return view ('crud');
        $toReturn=student::where('status', 1)->get();
        //  print_r($toReturn);
        // exit;
        
	    return view('crud')->with('toReturn',$toReturn);
	    // return view('crud',['toReturn'=>$toReturn]);
    }

    public function create(Request $REQUEST)
    {
        $create = new student();
        $create->name = $REQUEST->name;
        $create->roll = $REQUEST->roll;
        $create->save();
        return redirect('crud');
    }

    public function edit (Request $Request)
    {

        $eidt = student::where('id', $Request->id_edit)->update(array(
            'name'=>$Request->name,
            'roll'=>$Request->roll
        ));
        return redirect('crud');
    }

    public function delete(Request $Request)
    {
        $del=student::where('id',$Request->id)->update(array(
            'status'=>0
        ));
        return redirect('crud');
    }

}
