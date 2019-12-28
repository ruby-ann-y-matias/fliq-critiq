<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
	function flicks() {
		return $this->belongsToMany('App\Flick');
	}
}
