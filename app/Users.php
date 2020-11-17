<?php

namespace App;
use App\Hostels;
use App\Bookings;


use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function hostels(){

    	return $this->hasOne(Hostels::class);
    }

    public function bookings(){

    	return $this->hasMany(Bookings::class);
    }
}
