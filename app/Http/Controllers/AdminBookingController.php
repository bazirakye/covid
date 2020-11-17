<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBookingController extends Controller
{
    public function booking()
    {

    	$bookings = DB::table('bookings')->get();

    	// $roomid = DB::table('bookings')->value('room_id');
    	// $roomdetails=DB::table('rooms')->where('id', $roomid)->get();


    	// $hostelid = DB::table('bookings')->value('hostel_id');
    	// $hosteldetails=DB::table('hostels')->where('id', $hostelid)->get();

    	// $studentid = DB::table('bookings')->value('student_id');
    	// $studentdetails=DB::table('users')->where('id', $studentid)->get();

    	// $custodianid=DB::table('hostels')->where('id', $hostelid)->value('custodian_id');
    	// $custodiandetails=DB::table('users')->where('id', $custodianid)->get();

    	// var_dump($roomdetails);

    	// var_dump($hosteldetails);

    	// var_dump($studentdetails);

    	// var_dump($custodiandetails);
        // return view('admin.bookings');


        return view('admin.bookings' , compact('bookings'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
