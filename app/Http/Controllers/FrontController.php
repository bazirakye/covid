<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rooms;
class FrontController extends Controller
{
	
    public function rooms(){


        $rooms = Rooms::paginate(6);
        // $rooms = DB::table('rooms')->orderBy('id', 'desc')->get();
        
    	return view('front.rooms', compact('rooms'));
    }

    public function roomdetails(){

   		$rooms= DB::table('rooms')->where('id' , request('room'))->first();
    	
    	$hostelid= DB::table('rooms')->where('id' , request('room'))->value('hostel_id');
    	
    	$hostel=DB::table('hostels')->where('id', $hostelid)->get();

    	return view('front.room-details',array('rooms' => $rooms) ,compact('hostel'));
    }
}
