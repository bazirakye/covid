<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use Illuminate\Support\Facades\Hash;

class UsersAccountController extends Controller
{
    public function account()
    {
    	if(Auth::user()){
    	$user = user::find(Auth::user()->id);
    	if($user){
        return view('front.usersaccount')->withUser($user);
    }
    	else{
    	return redirect()->back();
        
    }

}else{
	return redirect()->back();
}

	}
	    public function update(Request $request){
    		
    		// 'name' -> 'required'
    		// 'phone' -> 'required|min(10|max(10))'
    		// 'email' ->' required|unique:users'
    		// 'password' -> 'required|min(8)'
    	$user = user::find(Auth::user()->id);

    	if($user){
			$user->name=$request['name'];
			$user->email=$request['email'];
			$user->phone=$request['phone'];

			if($request['password']==''){
				$user->password=$user->password;

			}else{
			if (Hash::check( $request['currentpassword'], $user->password))
			{
		
    		$user->password=bcrypt($request['password']);
    			}else{
				
				return redirect()->back()->with('error','Current password is incorrect');
			}
			}
			$user->save();
			
			// $user->password=$request->user()->fill([
   //          'password' => md5($request->password)
   //      ]);
			    		

			return redirect()->back()->with('success','updated successfully!');

    	}else{
    		return redirect()->back();
    	}
    }
}