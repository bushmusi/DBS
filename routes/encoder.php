<?php

use Illuminate\Support\Facades\View;


Route::group(["namespace"=>"Encoder"],function() {
    Route::get("/hello","IndexController@index"); // actually calls \App\Http\Controllers\AdminPanel\AdminControllers because of the namespace
    
    Route::get('/encoder','IndexController@getIndex')->name('encoder');
    
    Route::get('encoder/data','IndexController@anyData')->name('encoder.data');

    Route::get('encoder/approve','IndexController@approve')->name('encoder.approve');

    Route::get('encoder/remove','IndexController@remove')->name('encoder.remove');
});