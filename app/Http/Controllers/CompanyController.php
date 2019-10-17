<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Session;
use Response;
use App\Company;
use App\User;
use DB;
use Hash;
use Auth;

class CompanyController extends Controller
{

   public function index()
   {
      $cities = DB::table('cities')->orderBy('city','ASC')->where('is_deleted', '=', 0)->get();
      $countries = DB::table('countries')->where('is_deleted', '=', 0)->get();
      $state = DB::table('state')->orderBy('state','ASC')->where('is_deleted', '=', 0)->get();
      $cmpnydata = DB::table('org')->where('is_deleted', '=', 0)->get();
      $data['content'] = 'admin.company.Company-Listing';
      return view('layouts.content', compact('data'))->with(['cities' => $cities, 'countries' => $countries, 'state' => $state, 'cmpnydata' => $cmpnydata]);
   }

   public function store(Request $request)
   {

     //print_r($request->all());die();
      try {

         // $validator = Validator::make($request->all(), [
         //    'title' => 'required|unique:posts|max:255',
         //    'body' => 'required',
         // ]);
         // if ($validator->fails()) {
         //    return back()
         //    ->withErrors($validator)
         //    ->withInput();
         // }
         if ($request->company_name != '') {
            if ($request->file('logo') != '') {
               request()->validate([
                  'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

               ]);
               $imageName = time() . '.' . request()->logo->getClientOriginalExtension();
               request()->logo->move(public_path('images/company'), $imageName);

               if (file_exists(public_path('images/company/' . $request->new_logo))) {
                  @unlink(public_path('images/company/' . $request->new_logo));
               }
            } else {
               $imageName = $request->new_logo;
            }
            if ($request->ids == '') {
               if ($request->username != '') {
                  $udata = new User;
                  $udata->username = $request->username;
                  $udata->password = Hash::make($request->password);
                  $udata->email = $request->email;
                  $udata->address = $request->address;
                  $udata->name = $request->company_name;
                  $udata->users_role = 2;
                  $udata->ip_address = $request->ip();
                  $udata->save();
                  $uid = $udata->id;
               }

               if ($request->username != '') {
                  $orgData['users_id'] = $uid;
               }
            }
            $orgData['org_code'] = 'ITS2132';
            $orgData['org_name'] = $request->company_name;
            $orgData['contact_no'] = $request->ph_num;
            $orgData['email'] =  $request->email;
            $orgData['address'] =  $request->address;
            $orgData['website'] =  $request->website;
            $orgData['city_id'] =  $request->city;
            $orgData['state_id'] =  $request->state;
            $orgData['country_id'] =  $request->country;
            $orgData['photo'] =  $imageName;
            $orgData['zipcode'] = $request->zip;
            $orgData['org_type'] =  $request->company_type;
            $orgData['pf_no'] =  $request->pf_num;
            $orgData['esic_no'] =  $request->esci_num;
            $orgData['tax_no'] =  $request->tax_num;
            $orgData['policy_no'] =  $request->policy_num;
            $orgData['gratuity_no'] =  $request->gratuity_num;
            $orgData['login_status'] =  $request->login_status;
            $orgData['status'] =  $request->company_status;
            $orgData['ip_address'] =  $request->ip();
            $orgData['created_at'] =  date('Y-m-d H:i:s');

            if ($request->ids != '') {
               $id = $request->ids;
               Company::where('id', $id)->update($orgData);
               Session::flash('success', 'Updated Successfully');
               return Back();
            } else {
               Company::insert($orgData);
            }
         }
         Session::flash('success', 'Inserted Successfully..!');
         return Back();
      } catch (Exception $e) {
         echo $e->getMessage();
      }
   }


   public function edit(Company $company, $id)
   {
      $data = Company::where('id', $id)->first();
      $uid = $data['users_id'];
      $udata = User::where('id', $uid)->first();
      $data->username = $udata['username'];
      if ($data) {
         return Response::json($data);
      }
   }

   public function destroy(Company $company, $id)
   {
      $uid = $company->where('id',$id)->get(['users_id','photo'])->toArray();
      if (file_exists(public_path('images/company/' . @$uid[0]['photo']))) {
         @unlink(public_path('images/company/' . @$uid[0]['photo']));
      }
      $data['is_deleted'] = 1;
      $data['deleted_by'] = Auth::user()->id;
      $data['deleted_date'] = date('Y-m-d H:i:s');
      DB::table('org')->where('id',$id)->delete();
      User::where('id', @$uid[0]['users_id'])->delete();
      Session::flash('error', 'Item is deleted Successfully..!');
      return Back();
   }
}
