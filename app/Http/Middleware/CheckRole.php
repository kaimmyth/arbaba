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
        $odata = Company::where('users_id',$authID)->first();
        Session::put('gorgID',$odata->id);
        Session::put('org_id',Auth::user()->org_id);
        Session::put('role',Auth::user()->users_role);
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->users_role == 3) {
        $authID = Auth::user()->id;
        $role = Auth::user()->users_role;
        // $users_role = Auth::user()->users_role;
        // print_r($users_role);
        // exit;
        $odata = candidate::where('user_id',$authID)->first();
        Session::put('gorgID',$odata->users_role);
        Session::put('gorgID',$odata->id);
        Session::put('role',Auth::user()->users_role);
        return $next($request);
    }
    else {

        return redirect('login');
    }
}
}
