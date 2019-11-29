<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\employees;
use Session;

class EmployeesController extends Controller
{
    // employee home
    public function index(Request $request)
    {
        $org_id = $request->session()->get('org_id');
        $role = $request->session()->get('role');
        // print_r($role);
        // exit;

        if($role == 1)
        {
           
           
            $toReturn=array();
            $toReturn=employees::orderBy('id', 'desc')->get()->toArray();
     
        }
        elseif($role == 2)
        {
           
           
            $toReturn=array();
            $toReturn=employees::orderBy('id', 'desc')->where('org_id',Session::get('org_id'))->get()->toArray();
     
     
        }
        elseif($role == 3)
        {
            
            
            $toReturn=array();
            $toReturn=employees::orderBy('id', 'desc')->where('created_by',Session::get('candidate_id'))->get()->toArray();
     
        }
        else
        {
            Session::flash('success', 'error');
        }


      
        $data['content'] ='employee.employee';
	    return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
    }

    // employee add/edit employee
    public function add_edit_employee(Request $request)
    {
        $employee = new employees();
        $employee->title = $request->title;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->display_name_as = $request->title." ".$request->first_name." ".$request->last_name;
        $employee->email_id = $request->email_id;
        $employee->phone_no = $request->phone_no;
        $employee->mobile_no = $request->mobile_no;
        $employee->address = $request->address;
        $employee->city = $request->city;
        $employee->state = $request->state;
        $employee->pin_code = $request->pin_code;
        $employee->country = $request->country;
        $employee->experience = $request->experience;
        $employee->designation = $request->designation;
        $employee->job_type = $request->job_type;
        $employee->tax_type = $request->tax_type;
        $employee->billing_rate = $request->billing_rate;
        $employee->employee_id_no = $request->employee_id_no;
        $employee->employee_id = $request->employee_id;
        $employee->gender = $request->gender;
        $employee->hire_date = date("Y-m-d",strtotime($request->hire_date));
        $employee->release_date = date("Y-m-d",strtotime($request->release_date));
        $employee->dob =date("Y-m-d",strtotime( $request->dob));
        $employee->org_id=Session::get('org_id');
        $employee->created_by=Session::get('candidate_id');
        $employee->updated_by=Session::get('candidate_id');


        // finall query create, edit
        if($request->hidden_input_purpose=="edit")
        {
            $update_values_array = json_decode(json_encode($employee), true);
            $update_query = employees::where('id', $request->hidden_input_id)->update($update_values_array);
        }
        else if($request->hidden_input_purpose=="add")
        {
            $employee->save();
        }
        return redirect('employee');
    }

    // delete employee
    public function delete_employee($id="")
    {
        $del=employees::where('id',$id)->delete();
        return redirect('employee');
    }

    // get employee details -> for -> view and edit -> in jquery ajax
    public function get_employee_details($id=""){
        $data = employees::where('id', $id)->first();
        $data->hire_date = date("d-m-Y", strtotime($data->hire_date));
        $data->release_date = date("d-m-Y", strtotime($data->release_date));
        $data->dob = date("d-m-Y", strtotime($data->dob));
        return $data;
    }
}
