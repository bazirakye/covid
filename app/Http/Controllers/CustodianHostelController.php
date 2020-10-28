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
}
