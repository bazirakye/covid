<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Mail;
use App\custodians;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NewCustodianController extends Controller
{
      public function newcustodian()
    {
        $users = DB::table('users')->where('user_type', '1')->get();
        return view('admin.newcustodian')->with('users', $users);
    }

     public function check(Request $request){

    $user = user::find(Auth::user()->id);

    if($user){

         


	if (User::where('email', '=', $request['email'])->exists()) {
   		
   		// dd($request['email']);
		 // User::where('email', $request['email'])->update();
		 $change = User::where('email', '=',  $request['email']);
		 $change->update(['user_type' => 3]);
		 // $change->save();
         // $data=$request ->all();
         // $custodian = new custodians;
         // $custodian ->email =$data['email'];
         // $custodian ->save();
    
		 return redirect()->back();//->with('success','Custodian made successfully');
		}
	else{
		return redirect()->back()->with('error','No such email in the database');
	}
     }else{
     	return redirect()->back();
     }
}
}