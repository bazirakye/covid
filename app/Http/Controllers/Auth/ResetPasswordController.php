<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
     protected function redirectTo(){
        if(Auth::user()->user_type=='2'){
            return ('admin/dashboard');
        }
        elseif(Auth::user()->user_type=='1'){
            return ('/');
        }
        elseif(Auth::user()->user_type=='3'){
            return ('custodian/dashboard');
        }
        
    }
}
