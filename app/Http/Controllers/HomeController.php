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

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('role');
  }

  public function UserProfile(Request $request)
  {
    $profileData = Auth()->user();
    $data['content'] = 'admin.user.user-profile';
    return view('layouts.content', compact('data'));
  }

  public function UpdateProfile(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'password' => 'require|min:8',
      'new_password' => 'required|same:password',
      'email' => 'required|email',
    ]);
    if ($validator->fails()) {
      return redirect()->back()
      ->withErrors($validator)
      ->withInput();
    }
    if ($request->c_ids != '') {
      $cdata['org_name'] = $request->name;
      $cdata['email'] = $request->email;
      Company::where('id', $request->c_ids)->update($cdata);
    }
    if ($request->u_ids != '') {
      $udata['username'] = $request->username;
      $udata['email'] = $request->email;
      $udata['password'] = Hash::make($request->password);
      User::where('id', $request->u_ids)->update($udata);
    }

    return back();
  }

  public function Dashboard(Request $request)
  {
    $data['content'] = 'admin.home';
    return view('layouts.content', compact('data'));
  }

  public function index()
  {

    // Session::flash('success', 'login Successfully..!');
    return Redirect::action('HomeController@Dashboard');
  }
  
}
