<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\country;
use App\state;
use App\cities;
use App\time_zone;
use App\currencies;
use App\tax;
use App\terms;
use App\countries;
use App\city;
use App\candidate;
use App\users;
use DB;
use Hash;
use Session;

class settingController extends Controller
{

    // ==================================== Tax Rate ================================================

    public function view_tax_rate()
    {
        $toReturn=array();
        $toReturn=tax::where('status',1)->orderBy('id','DESC')->get()->toArray();
        $data['content'] ='tools-master/tax_rate';
        return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
    }

    public function add_tax_rate(Request $request)
    {
        $employee = new tax();
        $employee->tax_name = $request->tax_name;
        $employee->tax_type = $request->tax_type;
        $employee->tax_discription = $request->tax_discription;
        $employee->tax_validity = $request->tax_validity;
        $employee->tax_rate = $request->tax_rate;
        $employee->save();
        Session::flash('success', 'add Successfully');
        return redirect('tools-master/tax_rate');
    }



    public function  update_tax_rate(Request $Request)
    {
        
        $update_about=tax::where('id',$Request->tax_id)->update(array(
            'tax_name'=>$Request->tax_name,
            'tax_type' => $Request->tax_type,
            'tax_discription' => $Request->tax_discription,
            'tax_validity' => $Request->tax_validity,
            'tax_rate' => $Request->tax_rate
        ));
        Session::flash('success', 'update Successfully');
        return redirect('tools-master/tax_rate');
    }

    public function delete_tax_rate(Request $Request)
    {
        $del=tax::where('id',$Request->id)->update(array(
            'status'=>0
        ));
        Session::flash('success', 'remove Successfully');
        return redirect('tools-master/tax_rate');
    }

   
     // ==================================== time zone ================================================

     public function view_time_zone()
     {
         $toReturn=array();
         $toReturn=time_zone::where('status',1)->orderBy('id','DESC')->get()->toArray();
         $data['content'] ='tools-master/time_zone';
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
         Session::flash('success', 'add Successfully');
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
         Session::flash('success', 'update Successfully');
         return redirect('tools-master/show_time_zone');
     }
 
   
     public function delete_time_zone(Request $Request)
     {
         $del=time_zone::where('id',$Request->id)->update(array(
             'status'=>0
         ));
         Session::flash('success', 'remove Successfully');
         return redirect('tools-master/show_time_zone');
     }

     
      // ========================================== country ======================================
     
    public function view_country()
    {
        $toReturn=array();
        $toReturn=countries::where('status',1)->orderBy('id','DESC')->get()->toArray();
        $data['content'] ='tools-master/country';
	    return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
    }
    
    public function add_new_country(Request $request)
    {
        $employee = new countries();
        $employee->country = $request->country_name;
        $employee->save();
        Session::flash('success', 'add Successfully');
        return redirect('tools-master/show_country');
    }
    
   

    public function  update(Request $Request)
    {
        
        $update_about=countries::where('id',$Request->coun_id)->update(array(
            'country'=>$Request->country_name
        ));
        Session::flash('success', 'update Successfully');
        return redirect('tools-master/show_country');
    }

    
    public function delete_country(Request $Request)
    {
        $del=countries::where('id',$Request->id)->update(array(
            'status'=>0
        ));
        Session::flash('success', 'remove Successfully');
        return redirect('tools-master/show_country');
    }

  
    // ==================================== state =====================================================

    public function view_state()
    {
        $toReturn=array();
        $toReturn['state']=state::where('status',1)->orderBy('id','DESC')->get()->toArray();
        $toReturn['country']=countries::where('status',1)->get()->toArray();
        $data['content'] ='tools-master/state';
        return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
        
    }

    public function add_new_state(Request $request)
    {
        $new_terms = new state();
        $new_terms->state = $request->state_name;
        $new_terms->country_id = $request->country_id;
        $new_terms->save();
        Session::flash('success', 'add Successfully');
        return redirect('tools-master/state');
    }

    public function  update_state(Request $Request)
    {
        $update_about=state::where('id',$Request->state_id)->update(array(
            'state'=>$Request->state_name
        ));
        Session::flash('success', 'update Successfully');
        return redirect('tools-master/state');
    }

    public function delete_state(Request $Request)
    {
        $del=state::where('id',$Request->id)->update(array(
            'status'=>0
        ));
        Session::flash('success', 'remove Successfully');
        return redirect('tools-master/state');
    }

   
   // ================================================= city ============================================
  
    
   public function view_city()
   {
       $toReturn=array();
       $toReturn['cities']=cities::where('status',0)->orderBy('id','DESC')->get()->toArray();
       $toReturn['state']=state::where('status',1)->get()->toArray();
       $toReturn['country']=countries::where('status',1)->get()->toArray();
       $data['content'] ='tools-master/city';
       return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
   }

   public function add_new_city(Request $request)
   {
       $new_terms = new cities();
       $new_terms->city = $request->city_name;
       $new_terms->state_id = $request->state_id;
       $new_terms->save();
       Session::flash('success', 'add Successfully');
       return redirect('tools-master/city');
   }
   
   public function  update_city(Request $Request)
   {
       $update_about=cities::where('id',$Request->city_id)->update(array(
           'city'=>$Request->city_name
       ));
       Session::flash('success', 'update Successfully');
       return redirect('tools-master/city');
   }

    public function delete_city(Request $Request)
    {
        $del=cities::where('id',$Request->id)->update(array(
            'status'=>1
        ));
        Session::flash('success', 'remove Successfully');
        return redirect('tools-master/city');
    }

   public function fetch_according_to_country($id=""){
    $data = state::where('country_id', $id)->get()->toArray();
    return $data;
    }

    // ============================================= terms =====================================

    public function view_terms()
    {
        $toReturn=array();
        $toReturn=terms::where('status',1)->orderBy('terms','DESC')->get()->toArray();
        $data['content'] ='tools-master/terms';
	    return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
    }
    
    public function add_new_terms(Request $request)
    {
        $employee = new terms();
        $employee->terms = $request->new_terms;
        $employee->terms_type = $request->terms_type;
        $employee->save();
        Session::flash('success', 'add Successfully');
        return redirect('tools-master/terms');
    }
    
  
    public function  update_terms(Request $Request)
    {
        $update_about=terms::where('id',$Request->terms_id)->update(array(
            'terms'=>$Request->terms_terms,
            'terms_type'=>$Request->terms_type
           
        ));
        Session::flash('success', 'update Successfully');
        
        return redirect('tools-master/terms');
    }

    public function delete_terms(Request $Request)
    {
        $del=terms::where('id',$Request->id)->update(array(
            'status'=>0
        ));
        // $del=terms::where('id',$Request->id)->first();
        // return $del;
        Session::flash('success', 'remove Successfully');

        return redirect('tools-master/terms');
    }


    // public function delete_terms($id="")
    // {
    //     $del=terms::where('id',$id)->delete();
    //     return redirect('tools-master/terms');
    // }

   

   
     // ==================================== Currency ================================================

     public function view_currency()
     {
         $toReturn=array();
         $toReturn=currencies::where('status',1)->orderBy('id','DESC')->get()->toArray();
         $data['content'] ='tools-master/currency';
         return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
     }
 
     public function add_currency(Request $request)
     {
         $employee = new currencies();
         $employee->name = $request->currency_name;
         $employee->code = $request->currency_code;
         $employee->symbol = $request->currency_symbol;
         $employee->format = $request->currency_formate;
         $employee->exchange_rate = $request->currency_exchange_rate;
         $employee->save();
         Session::flash('success', 'add Successfully');
         return redirect('tools-master/currency');
     }
 
 
 
     public function  update_currency(Request $Request)
     {
         
         $update_about=currencies::where('id',$Request->currency_id)->update(array(
             'name'=>$Request->currency_name,
             'code' => $Request->currency_code,
             'symbol' => $Request->currency_symbol,
             'format' => $Request->currency_formate,
             'exchange_rate' => $Request->currency_exchange_rate
         ));
        Session::flash('success', 'update Successfully');
         return redirect('tools-master/currency');
     }
 
    

     public function delete_currency(Request $Request)
     {
         $del=currencies::where('id',$Request->id)->update(array(
             'status'=>0
         ));
         Session::flash('success', 'remove Successfully');
         return redirect('tools-master/currency');
     }

      //===================================== NiKhil User Setting =============================================
     
     public function index()
   {
     
      $countries = DB::table('countries')->where('status', '=', 1)->get();
     $userdetails = DB::table('candidate')->get();
     $data['content'] ='setting.user';
      return view('layouts.content', compact('data'))->with(['countries' => $countries,'userdetails' =>$userdetails]);
   }



    public function add_user(Request $request)
   {

    $user_info = new users();
        $user_info->users_role=3;
        $user_info->name=$request->name;
        $user_info->username=$request->username;
        $user_info->password =Hash::make ($request->password);
        $user_info->email=$request->email;
        $user_info->phone=$request->phone;
        $user_info->address=$request->address_line1;
        $user_info->save();


        $product = new candidate();
        $product->name=$request->name;
        $product->user_id=$user_info->id;
        $product->user_role=$request->user_role;
        $product->phone=$request->phone;
        $product->email=$request->email;
        $product->gender=$request->gender;
        $product->company_name=$request->company_name;
        $product->address_line1=$request->address_line1;
        $product->city_district=$request->city_district;
        $product->state_provence=$request->state_provence;
        $product->country=$request->country;
        $product->pin_code=$request->pin_code;
        $product->username=$request->username;
        $product->password =Hash::make ($request->password);
        // $product->password = Hash::make($request->password);

        
        


        
        $product->profile_image = "";
        if($request->hasFile('profile_image'))
        {
            //
            $file = $request->file('profile_image');

            $product->profile_image = $file->getClientOriginalName();
            $destinationPath = 'public/images';
            $file->move($destinationPath, $file->getClientOriginalName()); 
        }
        else{
          if($request->hidden_input_purpose=="edit")
          {
            $data = candidate::select('profile_image')->where('id', $request->hidden_input_id)->first();
            if($data->profile_image!=""){
              $product->profile_image = $data->profile_image;
            }
          }
        }

       if($request->hidden_input_purpose=="edit")
        {
            $update_values_array = json_decode(json_encode($product), true);
            $update_query = DB::table('candidate')->where('id', $request->hidden_input_id)->update($update_values_array);
            Session::flash('success', ' updated successfully');
        }
        else if($request->hidden_input_purpose=="add")
        {
            $product->save();
            Session::flash('success', ' saved successfully');
        }
        
        return redirect('setting/user');




    }

    public function delete_user($id="")
    {
        $del=DB::table('candidate')->where('id',$id)->delete();
        Session::flash('success', 'Customer details has been deleted successfully');
      
        return redirect('setting/user'); 
    }

    public function get_user_details($id=""){
        $data = candidate::leftJoin('countries','candidate.country','=','countries.id')
              ->select('candidate.*','countries.country as country')
              ->where('candidate.id', $id)
              ->first();
        return $data;
    }

}
