<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hostels;

class Hostels extends Model
{
   	 public function users(){
    	return $this->belongsto(Users::class);
    	
    }
    //  protected $fillable = [
    //     'id',
    //     'hostelName',
    //     'descripton',
        
    // ];
    public function rooms(){

    	return $this->hasmany(Rooms::class);
    }
}



