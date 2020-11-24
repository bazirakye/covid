<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
// use App\Custodian;
use Illuminate\Http\Request;

class CustodiansController extends Controller
{
     public function custodians()
    {
    	 $custodians = DB::table('users')->where('user_type' , '3')->get();

        return view('admin.custodians')->with('custodians', $custodians)->with('i', (request()->input('page', 1) - 1) * 5);
    }


     public function change(Request $request) {
      // DB::delete('delete from custodians where id = ?',[$id]);
      // return redirect()->back()->with->('sucess', 'Custodian deleted success');
       $change = User::where('email', '=',  $request['email']);
     $change->update(['user_type' => 1]);
   }
  
     public function students()
    {
       $students = DB::table('users')->where('user_type' , '1')->get();

        return view('admin.students')->with('students', $students)->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
