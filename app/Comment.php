<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function user() {
    	return $this->belongsTo('App\User');
    }

    function flick() {
    	return $this->belongsTo('App\Flick');
    }

    function likes() {
    	return $this->belongsToMany('App\User', 'likes', 'comment_id', 'user_id');
    }

    function replies() {
    	return $this->hasMany('App\Reply');
    }
}
