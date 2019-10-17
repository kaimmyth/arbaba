<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Company;
use Session;

class CheckRole
{

    public function handle($request, Closure $next)
    {
     if (Auth::check() && Auth::user()->users_role == 1) {
        $authID = Auth::user()->id;
        $odata = Company::where('users_id',$authID)->first();
        if ($odata) {
            Session::put('gorgID',$odata->id);
        }else{
            Session::put('gorgID',1);
        }       

        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->users_role == 2) {
        $authID = Auth::user()->id;
        $odata = Company::where('users_id',$authID)->first();
        Session::put('gorgID',$odata->id);
        return $next($request);
    }
    else {

        return redirect('login');
    }
}
}
