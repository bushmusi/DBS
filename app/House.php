<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //
    protected $fillable = ['size','type','bankLoan','unit','bed','bathroom','parking'];

    const TYPE_1 = 'Apartama';
    const TYPE_2 = 'Mall';
    const TYPE_3 = 'Real Estate';

    const BANK_loan_1 = 'Credited';
    const BANK_loan_2 = 'Free';

    public function itemPost() {
        return $this->belongsTo('App\ItemPost');
    }

}
