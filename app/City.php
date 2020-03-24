<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    ////
    protected $fillable = ['name', 'state_id'];
    
    const METHOD_CITY_ID_1 = '1';
    const METHOD_CITY_ID_2 = '2';
    const METHOD_CITY_ID_3 = '3';
    const METHOD_CITY_ID_4 = '4';
    const METHOD_CITY_ID_5 = '5';


    public function state() {
        return $this->belongsTo('App\State');
    }
    ////
    public function itemPosts() {
        return $this->hasMany('App\ItemPost');
    }
}
