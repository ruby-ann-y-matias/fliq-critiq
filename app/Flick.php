<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flick extends Model
{
    function genres() {
    	return $this->belongsToMany('App\Genre');
    }

   	function users() {
        return $this->belongsToMany('App\User', 'bingelists', 'flick_id', 'user_id');
    }

    function comments() {
    	return $this->hasMany('App\Comment');
    }
}
