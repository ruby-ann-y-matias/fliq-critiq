<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    function users() {
    	return $this->belongsTo('App\User');
    }

    function comments() {
    	return $this->belongsTo('App\Comment');
    }
}
