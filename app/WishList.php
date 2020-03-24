<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    //
    public function itemPost() {
        return $this->belongsTo('App\ItemPost');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
