<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPost extends Model
{
    //
    protected $fillable = ['userID', 'title','itemName', 'itemPrice','itemTypeID', 'cityID'];
    const METHOD_SELLER_TYPE_1 = 'Own';
    const METHOD_SELLER_TYPE_2 = 'Broker';
    const METHOD_SELLER_TYPE_3 = 'Company';


    public function city(){
        return $this->belongsTo('App\City');
    }

    public function itemType(){
        return $this->belongsTo('App\ItemType');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function car(){
        return $this->hasOne('App\Car');
    }
    public function house(){
        return $this->hasOne('App\House');
    }

    public function pictures(){
        return $this->hasMany('App\Picture');
    }

    public function wishlists(){
        return $this->hasMany('App\WishList');
    }
}
