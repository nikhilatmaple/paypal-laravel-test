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

Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'PaypalController@payWithPaypal'));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'PaypalController@postPaymentWithpaypal'));
Route::get('paypal', array('as' => 'payment.status','uses' => 'PaypalController@getPaymentStatus'));