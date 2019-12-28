<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    function user() {
    	return $this->belongsTo('App\User');
    }

    function comment() {
    	return $this->belongsTo('App\Comment');
    }

    function userlikes() {
    	return $this->belongsToMany('App\User', 'reply_likes', 'reply_id', 'user_id');
    }
}
