<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function artist(){
    	return $this->belongsTo('App\Artist');
    }

    public function format(){
    	return $this->belongsTo('App\Format');
    }
}
