<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\country;
use App\state;
use App\cities;
use App\time_zone;
use App\user;
use DB;

class settingController extends Controller
{

   public function index()
   {
     
      $countries = DB::table('countries')->where('is_deleted', '=', 0)->get();
     
  
   
   
     $data['content'] ='setting.user';
      return view('layouts.content', compact('data'))->with(['countries' => $countries]);
   }




    // ========================================== country ======================================
    

    public function view_country()
    {
        $toReturn=array();
        $toReturn=country::get()->toArray();
        $data['content'] ='country';
	    return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
    }
    
    public function add_new_country(Request $request)
    {
        $employee = new country();
        $employee->country_name = $request->country_name;
        $employee->save();
       
        return redirect('tools-master/show_country');
    }
    
   

    public function  update(Request $Request)
    {
        
        $update_about=country::where('id',$Request->coun_id)->update(array(
            'country_name'=>$Request->country_name
        ));
       
        return redirect('tools-master/show_country');
    }

    public function delete_country($id="")
    {
        $del=country::where('id',$id)->delete();
        return redirect('tools-master/show_country');
    }

    // ==================================== state =====================================================

    public function view_state()
    {
        $toReturn=array();
        $toReturn['state']=state::get()->toArray();
        $toReturn['country']=country::get()->toArray();
        $data['content'] ='state';
        return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
        
    }

    public function add_new_state(Request $request)
    {
        $new_terms = new state();
        $new_terms->state = $request->state_name;
        $new_terms->country_id = $request->country_id;
        $new_terms->save();
        return redirect('tools-master/state');
    }

    public function  update_state(Request $Request)
    {
        $update_about=state::where('id',$Request->state_id)->update(array(
            'state'=>$Request->state_name
        ));
       
        return redirect('tools-master/state');
    }

    public function delete_state($id="")
    {
        $del=state::where('id',$id)->delete();
        return redirect('tools-master/state');
    }

   // ================================================= city ============================================
  
    
   public function view_city()
   {
       $toReturn=array();
       $toReturn['country']=country::get()->toArray();
       $toReturn['state']=state::get()->toArray();
       $toReturn['cities']=cities::get()->toArray();
       $data['content'] ='city';
       return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
   }

   public function add_new_city(Request $request)
   {
       $new_terms = new cities();
       $new_terms->country_id = $request->country_id;
       $new_terms->state_id = $request->state_id;
       $new_terms->city = $request->city_name;
       $new_terms->save();
       return redirect('tools-master/city');
   }
   
   public function  update_city(Request $Request)
   {
       $update_about=cities::where('id',$Request->city_id)->update(array(
           'city'=>$Request->city_name
       ));
      
       return redirect('tools-master/city');
   }

   public function delete_city($id="")
   {
       $del=cities::where('id',$id)->delete();
       return redirect('tools-master/city');
   }

   public function fetch_according_to_country($id=""){
    $data = state::where('country_id', $id)->get()->toArray();
    return $data;
    }

    // ==================================== time zone ================================================

    public function view_time_zone()
    {
        $toReturn=array();
        $toReturn=time_zone::get()->toArray();
        $data['content'] ='time_zone';
        return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
    }

    public function add_time_zone(Request $request)
    {
        $employee = new time_zone();
        $employee->time_zone_name = $request->time_zone_name;
        $employee->short_name = $request->time_zone_short_name;
        $employee->change_time = $request->time_zone_change_time;
        $employee->cal_value = $request->time_zone_value;
        $employee->save();

        return redirect('tools-master/show_time_zone');
    }



    public function  update_time_zone(Request $Request)
    {
        
        $update_about=time_zone::where('id',$Request->time_zone_id)->update(array(
            'time_zone_name'=>$Request->time_zone_name,
            'short_name' => $Request->time_zone_short_name,
            'change_time' => $Request->time_zone_change_time,
            'cal_value' => $Request->time_zone_value
        ));

        return redirect('tools-master/show_time_zone');
    }

    public function delete_time_zone($id="")
    {
        $del=time_zone::where('id',$id)->delete();
        return redirect('tools-master/show_time_zone');
    }

// ===================================================== nikhil users ===================================================

    public function add_user(Request $request)
   {
     // $users = DB::table('users')->where('id', '=', 1)->get();
     // return view('layouts.content', compact('data'))->with(['name' => $name, 'role' => $role, 'city_district' => $city_district, 'state_provider' => $state_provider ,'phone' => $phone]);
        $product = new user();
        $product->name=$request->name;
        $product->role=$request->role;
        $product->phone=$request->phone;
        $product->email=$request->email;
        $product->gender=$request->gender;
        $product->address_line1=$request->address;
        $product->city_district=$request->city_district;
        $product->state_provider=$request->state_provider;
        $product->pin_code=$request->country;
        $product->username=$request->username;
        $product->password =$request->password;
       
        // for attachment
        // $product->attachment = "";
        // if($request->hasFile('attachment'))
        // {
        //     //
        //     $file = $request->file('attachment');

        //     $product->attachment = $file->getClientOriginalName();
        //     $destinationPath = 'public/images';
        //     $file->move($destinationPath, $file->getClientOriginalName()); 
        // }
        $product -> save();
        return redirect("setting/user");
    }

    // ============================================================= code end nikhil =================================

}
