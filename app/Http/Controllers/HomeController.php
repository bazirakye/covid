<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Image;
use App\Rooms;

class HomeController extends Controller
{
   


     public function index(){
     	
            $rooms = Rooms::all()->get();
            return view('front.rooms');
        
}

}