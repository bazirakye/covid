<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custodians extends Model
{
    public function hostels(){
    	return $this->hasone(Custodians::class);
    	

    }


     public function users(){
    	return $this->belongsto(Users::class);
    	

    }
    
}
