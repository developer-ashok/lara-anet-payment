<?php

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
    //return view('welcome');
	return redirect('pay');
});

Route::get('/pay','PaymentController@pay')->name('pay');
Route::post('/dopay/online', 'PaymentController@handleonlinepay')->name('dopay.online');