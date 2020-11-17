<?php

namespace App;
use App\Rooms;
use App\Hostels;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table='rooms';
    protected $fillable = [
        'room_no',
        'room_type',
        'price',
        'booking_price',
        'image',
        'status',
        'description'       
    ];

    public function hostel(){
    	return $this-> belongsto(Hostels::class);
    }
}
