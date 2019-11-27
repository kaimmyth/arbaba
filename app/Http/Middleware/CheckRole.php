<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Company;
use Session;
use App\candidate;
class CheckRole
{

    public function handle($request, Closure $next)
    {
        // print_r(Auth::user()->users_role);
        // exit;
     if (Auth::check() && Auth::user()->users_role == 1) {
        $authID = Auth::user()->id;
        $role = Auth::user()->users_role;
        $odata = Company::where('users_id',$authID)->first();
        if ($odata) {
            
            Session::put('gorgID',$odata->id);
            Session::put('org_id',Auth::user()->org_id);
            Session::put('role',Auth::user()->users_role);

        }else{
            Session::put('gorgID',1);
            Session::put('org_id',Auth::user()->org_id);
            Session::put('role',Auth::user()->users_role);
        }       

        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->users_role == 2) {
        $authID = Auth::user()->id;
        $role = Auth::user()->users_role;

        $org_id = Auth::user()->users_id;
        
        $odata = Company::where('users_id',$authID)->first();
        Session::put('gorgID',$odata->users_role);
        Session::put('gorgID',$odata->id);
        Session::put('org_name',$odata->org_name);
        Session::put('email',$odata->email);

        Session::put('org_id',$odata->users_id);

        Session::put('currency',$odata->currency);
        Session::put('time_zone',$odata->time_zone);
        Session::put('role',Auth::user()->users_role);
       
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->users_role == 3) {
        $authID = Auth::user()->id;
        $role = Auth::user()->users_role;
        $odata = candidate::where('user_id',$authID)->first();
        // print_r($authID);
        // exit;
        Session::put('role',Auth::user()->users_role);
        Session::put('org_id',$odata->org_id);
        Session::put('candidate_id',$odata->id);


         // $users_role = Auth::user()->users_role;
        // print_r($users_role);
        // exit;
        
        // echo "<pre>";
        // print_r($odata);
        // exit;

        return $next($request);
    }
    else {

        return redirect('login');
    }
}
}
