<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $fillable = ['model','transmition','year','engineType','condition','bodyType','iccType','color','colorCondition'];
    const METHOD_MODEL_1 = 'Microcar';
    const METHOD_MODEL_2 = 'Economy';
    const METHOD_MODEL_3 = 'hatchback';   
    const METHOD_MODEL_4 = 'Sedan';
    const METHOD_MODEL_5 = 'Coupe';
    const METHOD_MODEL_6 = 'Sports';
    const METHOD_MODEL_7 = 'cars';

    const METHOD_TRANSMITION_1 = 'Manual';
    const METHOD_TRANSMITION_2 = 'Automatic Transmission';
    const METHOD_TRANSMITION_3 = 'CVT'; 

    //$faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
    //$start_date = '2015-12-31 00:00:00';
    // $end_date = '2010-01-01 00:00:00';

    const year_1 ='2019';
    const year_2 ='2010';
    const year_3 ='1998';
    const year_4 ='2020';
    const year_5 ='1980';

    const engineType_1 = 'Internal combustion engines';
    const engineType_2 = 'External combustion engine';

    const condition_1 = 'slightly used';
    const condition_2 = 'used';
    const condition_3 = 'new';

    
    const BODY_TYPE_1 = 'Sedan';
    const BODY_TYPE_2 = 'Coupe';
    const BODY_TYPE_3 = 'Sports';
    const BODY_TYPE_4 = 'cars';

    const COLOR_1 = 'Red';
    const COLOR_2 = 'Black';
    const COLOR_3 = 'White';
    const COLOR_4 = 'Silver';
    
    public function itemPost() {
        return $this->belongsTo('App\ItemPost');
    }

}
