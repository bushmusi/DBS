<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    //
    protected $fillable = ['name'];

    const METHOD_ITEM_TYPE_1 = '1';
    const METHOD_ITEM_TYPE_2 = '2';


    const METHOD_ITEM_TYPE_NAME_1 = 'House';
    const METHOD_ITEM_TYPE_NAME_2 = 'Car';

    public function itemPosts(){
        return $this->hasMany('App\ItemPost');
    }
}
