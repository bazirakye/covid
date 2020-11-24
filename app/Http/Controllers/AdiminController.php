<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdiminController extends Controller
{
     public function dashboard()
    {

    	 $users = DB::table('users')->where('user_type', '1')->get();
    	 $custodian = DB::table('users')->where('user_type', '3')->get();
    	 $hostels = DB::table('hostels')->get();
    	 $bookings = DB::table('bookings')->get();

        return view('admin.dashboard' ,compact(['users','custodian','hostels','bookings']));
    }

    
}
