<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CustodianMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // return $next($request);
        if(Auth::user()->user_type=='3'){
        return $next($request);    
        }
        // elseif(Auth::user()->user_type=='2'){
        // return redirect('admin/dashboard');
        // }
        
        else{
            return redirect('front/rooms');
        }
    }
}
