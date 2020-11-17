<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Rooms;
use App\user;
use App\Bookings;

class BookingSummaryController extends Controller
{
    public function bookingsummary()
    {
        $room= DB::table('rooms')->where('id' , request('room'))->first();

        $hostelid= DB::table('rooms')->where('id' , request('room'))->value('hostel_id');
    	
    	$hostel=DB::table('hostels')->where('id', $hostelid)->get();


    	if(Auth::user()){
    	$user = user::find(Auth::user()->id);
        
    	
    }
	     // var_dump($room);
         return view('front.bookingsummary' , array('room' => $room) , compact('hostel'))->withUser($user);


    }


}
