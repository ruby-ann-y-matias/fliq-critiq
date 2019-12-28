<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    function sender() {
    	return $this->belongsTo('App\User', 'sender_id');
    }

    function recipient() {
    	return $this->belongsTo('App\User', 'recipient_id');
    }
}
