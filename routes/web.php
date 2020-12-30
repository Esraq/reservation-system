<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/approve','App\Http\Controllers\ApproveController@index');

Route::Resource('/reservation','App\Http\Controllers\ReservationController');

Route::get('/list','App\Http\Controllers\ListController@index');

Route::get('confirmation/{email}/{name}/{phone}/{seats}/{address}','App\Http\Controllers\ListController@confirmation');
