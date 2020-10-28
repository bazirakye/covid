<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersAccountController extends Controller
{
    public function account()
    {
        
    	return view('front.usersaccount');
    }
}
