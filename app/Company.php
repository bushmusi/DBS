<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name', 'logoImage', 'description','city_id','webAddress','address','phone'
    ];

    function user(){
        return $this->belongsTo('App\User');
    }
}
