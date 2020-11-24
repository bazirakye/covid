<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CustodianController extends Controller
{
    public function dashboard()
    {
        $userid = auth()->user()->id;

         
         $hostelid=DB::table('hostels')->where('custodian_id' , $userid)->value('id');

         

        $mybooking= DB::table('bookings')->where('hostel_id' , $hostelid)->get();

        $myroom= DB::table('rooms')->where('hostel_id' , $hostelid)->where('status', 'on')->get();

        return view('custodian.dashboard', compact(['mybooking', 'myroom']));
    }
}
