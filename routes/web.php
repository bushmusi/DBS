<?php

use Illuminate\Support\Facades\View;
use App\UserType;

// "View" is the View Facade
$types = UserType::all();
View::share('UserTypeList', $types);
//


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::controller('datatables', 'DatatablesController', [
//     'anyData'  => 'datatables.data',
//     'getIndex' => 'datatables',
// ]);

Route::get('/encoder','EncoderController@getIndex')->name('encoder');
Route::get('encoder/data','EncoderController@anyData')->name('encoder.data');

Route::get('encoder/approve','EncoderController@approve')->name('encoder.approve');

Route::get('encoder/remove','EncoderController@remove')->name('encoder.remove');


