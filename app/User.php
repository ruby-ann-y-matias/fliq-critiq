<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'birthdate', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function roles() {
        return $this->belongsToMany('App\Role');
    }

    function followers() {
        return $this->belongsToMany('App\User','followers','user_id','follower_id');
    }

    function following() {
        return $this->belongsToMany('App\User','followers','follower_id','user_id');
    }

    function flicks() {
        return $this->belongsToMany('App\Flick', 'bingelists', 'user_id', 'flick_id')->withTimestamps();
    }

    function comments() {
        return $this->hasMany('App\Comment');
    }

    function likes() {
        return $this->belongsToMany('App\Like', 'likes', 'user_id', 'comment_id')->withTimestamps();
    }

    function replylikes() {
        return $this->belongsToMany('App\ReplyLike', 'reply_likes', 'user_id', 'reply_id')->withTimestamps();
    }

    function sentMessages() {
        return $this->hasMany('App\Message', 'sender_id');
    }

    function receivedMessages() {
        return $this->hasMany('App\Message', 'recipient_id');
    }
}
