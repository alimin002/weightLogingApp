<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/**
Route::get('/', function () {
    return view('welcome');
});
**/
	Route::get('/','weightLog@index');
	Route::get('weight_log','weightLog@index');
	Route::get('weight_log/create','weightLog@create');
	Route::post('weight_log/save','weightLog@save');
	Route::post('weight_log/update','weightLog@update');
	Route::get('weight_log/delete/{weight_log_id}','weightLog@delete');
	Route::post('weight_log/destroy','weightLog@destroy');
	Route::get('weight_log/edit/{weight_log_id}','weightLog@edit');
	Route::get('weight_log/display/{weight_log_id}','weightLog@display');
	


