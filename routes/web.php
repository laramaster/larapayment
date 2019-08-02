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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'admin','middleware'=>'auth','prefix'=>'admin'],function(){
	Route::resource('/card','CardController');
	Route::get('/developer', 'DeveloperController@index')->name('admin.developer');
	Route::get('/balence', 'BalenceController@index')->name('admin.balence');
	// Route::get('/payment_check', 'BalenceController@payment_check')->name('admin.payment_check');

});
Route::get('/payment', 'PaymentController@payment')->name('payment');