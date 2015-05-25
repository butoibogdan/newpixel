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

Route::get('login', 'AdminController\HomeAdmin@getLogin');
Route::post('login', 'AdminController\HomeAdmin@postLogin');

Route::get('register', 'AdminController\HomeAdmin@getRegister');
Route::post('register', 'AdminController\HomeAdmin@postRegister');

Route::group(array('before' => 'auth'), function() {
    Route::get('admin', 'AdminController\DashboardAdmin@index');
});

Route::get('logout', 'AdminController\HomeAdmin@logout');

Route::get('continente','AdminController\Pages\ContinenteController@index');
Route::get('continente/create','AdminController\Pages\ContinenteController@create');
Route::post('continente','AdminController\Pages\ContinenteController@store');

Route::get('continente/{id}/edit','AdminController\Pages\ContinenteController@edit');
Route::PATCH('continente/{id}/edit','AdminController\Pages\ContinenteController@update');
Route::post('continente/{id}/edit','AdminController\Pages\ContinenteController@update');

Route::get('continente/destroy/{id}','AdminController\Pages\ContinenteController@destroy');
Route::get('continente/{id}','AdminController\Pages\ContinenteController@show');


Route::get('tari','AdminController\Pages\TariController@index');
Route::get('tari/create','AdminController\Pages\TariController@create');
Route::post('tari','AdminController\Pages\TariController@store');

Route::get('tari/{id}/edit','AdminController\Pages\TariController@edit');
Route::PATCH('tari/{id}/edit','AdminController\Pages\TariController@update');
Route::post('tari/{id}/edit','AdminController\Pages\TariController@update');

Route::get('tari/destroy/{id}','AdminController\Pages\TarieController@destroy');
Route::get('tari/{id}','AdminController\Pages\TariController@show');