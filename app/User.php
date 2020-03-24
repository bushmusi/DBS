<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use Notifiable;

    const METHOD_USER_1 = '1';
    const METHOD_USER_2 = '2';
    const METHOD_USER_3 = '3';
    const METHOD_USER_4 = '4';
    const METHOD_USER_5 = '5';
    const METHOD_USER_6 = '6';
    const METHOD_USER_7 = '7';

   

    function company() {
        return $this->hasOne('App\Company');
    }
    function usertype() {
        return $this->belongsTo('App\Usertype');
    }
    function itemPosts() {
        return $this->hasMany('App\ItemPost');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','userTypeId','ipAddress','gender','phone','fname','mname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
