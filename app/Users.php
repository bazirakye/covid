<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function hostels(){

    	return $this->hasone(Hostels::class);
    }
}
