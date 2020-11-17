<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;
use Illuminate\Support\Facades\DB;

class CustodianHostelController extends Controller
{
     public function hostel()
    {
    	$user = user::find(Auth::user()->id);
        
    	$id=$user->id;
    	if($user){

    		
    		$hostel=DB::table('hostels')->where('custodian_id', $id)->get();
    		 return view('custodian.hostel' , compact('hostel'));

    		// var_dump($hostel);

    	}else{
    		return redirect()->back();
    	}
// var_dump($user);
        
    }

    public function mybooked()
    {
         $userid = auth()->user()->id;
         
         $hostelid=DB::table('hostels')->where('custodian_id' , $userid)->value('id');

         // var_dump($hostelid);

        $mybooking= DB::table('bookings')->where('hostel_id' , $hostelid)->get();

        // var_dump($mybooking);
        return view('custodian.bookings' ,compact('mybooking'))->with('i', (request()->input('page', 1) - 1) * 5);                
    }
}
