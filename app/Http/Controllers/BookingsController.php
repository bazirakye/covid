<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookings;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\Booked;
use Illuminate\Support\Facades\Mail;
use App\User;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = user::find(Auth::user()->id);
        $id = auth()->user()->id;
        

         $mybooking= DB::table('bookings')->where('student_id' , $id)->get();

        // var_dump($mybooking);
        return view('front.bookings' , compact('mybooking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
          

        $booking = new bookings();
        $booking->student_id = $request->input('student_id');
        $booking->student_name = $request->input('student_name');
        $booking->student_phone = $request->input('student_phone');
        $booking->student_email= $request->input('student_email');
        $booking->hostel_id = $request->input('hostel_id');
        $booking->hostel_name = $request->input('hostel_name');
        $booking->room_id = $request->input('room_id');
        $booking->room_no = $request->input('room_no');
        $booking->paid_booking_price = $request->input('paid_booking_price');

        $booking->balance = $request->input('balance');
        $booking->save(); 
        
        // Mail::to('mu017itm0003@muni.ac.ug')->send(new Booked($booking));

        $change =DB::table('rooms')->where('id', '=',  $request['room_id']);
         $change->update(['status' => 'booked']);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
