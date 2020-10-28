<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Hostels;

class NewHostelController extends Controller
{
     public function newhostel()
    {

        // $items = array('custodians' =>  DB::table('custodians')->get());
        $custodians =DB::table('users')->where('user_type','3')->get();


        return view('admin.newhostel')->with(compact('custodians'));
        // return \App\Item::where('id', $value)->exists();
    }


    public function hostelnew(Request $request)
    {

    		 // $items = array('itemlist' =>  DB::table('custodians')->get());
    		// $custodian =DB::table('custodians')->select('id','email')->get();
        if (Hostels::where('custodian_id', '=', $request['custodianId'])->exists()){
            return redirect()->back()->with('error','sorry custodian belongs to another hostel');
        }
        else{

    	   if($request ->isMethod('post')){
        	$data=$request ->all();
        	$hostel = new hostels;
        	$hostel->hostelName=$data['hostelname'];
			$hostel->description =$data['hosteldescription'];
			$hostel->custodian_id=$data['custodianId'];
			$hostel->save();      

			return redirect()->back()->with('success' , 'hostel added successfully' );
		}
		else{
			return redirect()->back()->with('error','sorry something went wrong');
		}

        }
    }
}
