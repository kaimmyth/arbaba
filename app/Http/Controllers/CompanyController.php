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
use App\Its_taxes_return;
use App\Record_Payment;
use validate;

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

  
   //taxes:tax return
   public function insert_tax_return(Request $request)
   {
        $taxes_return = new Its_taxes_return(); 
        $taxes_return->tax_name  =  $request->tax_name;
        $taxes_return->tax_description  =  $request->tax_description;
        $taxes_return->tax_agency =  $request->tax_agency;

        $taxes_return->sales_rate =  $request->sales_rate;
        $taxes_return->sales_account=  $request->sales_account; 
        $taxes_return->sales_tax_amount= $request->sales_tax_amount 	;
        $taxes_return->purchase_rate =  $request->purchase_rate;
        $taxes_return->purchase_account =  $request->purchase_account; 
        $taxes_return->purchase_tax_amount =  $request->purchase_tax_amount;
     
        $taxes_return->group_name =  $request->group_name;
        $taxes_return->group_description =  $request->group_description;
        $taxes_return->tax_rate =  $request->tax_rate;
        $taxes_return->applicable_on =  $request->applicable_on;
        $taxes_return->custom_tax_name =  $request->custom_tax_name;
        $taxes_return->custom_description =  $request->custom_description;
        $taxes_return->tax_agency_name =  $request->tax_agency_name;
        $taxes_return->registration_number =  $request->registration_number;
        $taxes_return->tax_period =  $request->tax_period;
        $taxes_return->filling_frequency =  $request->filling_frequency;
        $taxes_return->reporting_method =  $request->reporting_method;
        $taxes_return->tax_collected_on_sales =  $request->tax_collected_on_sales;
        $taxes_return->tax_collected_on_purchase =  $request->tax_collected_on_purchase;
        $taxes_return->status="Open";
        $taxes_return->save();


      return redirect('tax/return');

   }

   public function calender()
   {
      return view('taxes.tax_adjustment');
   }

   // taxes: record cst payment
   function record_cst_payment(Request $Request)
   {
      $record_payment=new Record_Payment();
      $record_payment->purpose=$Request->rec_cst_pay_purpose;
      $record_payment->period=$Request->rec_cst_pay_cst_period;
      $record_payment->payment_date=date("Y-m-d", strtotime($Request->rec_cst_pay_payment_date));
      $record_payment->payment_amount=$Request->rec_cst_pay_payment_amount;
      $record_payment->pay_memo=$Request->rec_cst_pay_memo;
      $record_payment->save();
    	return  redirect('/tax/payment-history');
   }

   function tax_return_view()
   {
      $join = DB::table('taxes_return')
      ->leftJoin('record_payment', 'taxes_return.ID', '=', 'record_payment.id')
      ->distinct('record_payment.id')
      ->get()->toArray();
//    echo "<pre>";
// print_r($join);
// exit;
   // return $join;
      

      $data['content'] = 'taxes.return';
	 return view('layouts.content',compact('data'))->with('toReturn', $join);

   }

   function tax_payment_history_view()
   {
      $toReturn=array();
      $toReturn=Record_Payment::get()->toArray();
      
       $data['content'] = 'taxes.payment_history';
	 	return view('layouts.content',compact('data'))->with('toReturn',$toReturn);
  
   }

   function payment_history_del($id="")
   {
     
      $del=Record_Payment::where('id',$id)->delete();
      
      return redirect('tax/payment-history');

   }
   
}
