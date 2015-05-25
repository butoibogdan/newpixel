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
//--------------------Sectiune Admin--------------------//

//--------------------Sectiune Login--------------------//
Route::get('login', 'AdminController\HomeAdmin@getLogin');
Route::post('login', 'AdminController\HomeAdmin@postLogin');
//--------------------Sectiune Register--------------------//
Route::get('register', 'AdminController\HomeAdmin@getRegister');
Route::post('register', 'AdminController\HomeAdmin@postRegister');
//--------------------Sectiune Dashboard After Login---------------//
Route::group(array('before' => 'auth'), function() {
    Route::get('admin', 'AdminController\DashboardAdmin@index');
});
//--------------------Sectiune Logout--------------------//
Route::get('logout', 'AdminController\HomeAdmin@logout');

//--------------------Sectiune Pagini Continente--------------------//
Route::get('continente','AdminController\Pages\ContinenteController@index');
Route::get('continente/create','AdminController\Pages\ContinenteController@create');
Route::post('continente','AdminController\Pages\ContinenteController@store');

Route::get('continente/{id}/edit','AdminController\Pages\ContinenteController@edit');
Route::PATCH('continente/{id}/edit','AdminController\Pages\ContinenteController@update');
Route::post('continente/{id}/edit','AdminController\Pages\ContinenteController@update');

Route::get('continente/destroy/{id}','AdminController\Pages\ContinenteController@destroy');
Route::get('continente/{id}','AdminController\Pages\ContinenteController@show');

//--------------------Sectiune Pagini Tari--------------------//
Route::get('tari','AdminController\Pages\TariController@index');
Route::get('tari/create','AdminController\Pages\TariController@create');
Route::post('tari','AdminController\Pages\TariController@store');

Route::get('tari/{id}/edit','AdminController\Pages\TariController@edit');
Route::PATCH('tari/{id}/edit','AdminController\Pages\TariController@update');
Route::post('tari/{id}/edit','AdminController\Pages\TariController@update');

Route::get('tari/destroy/{id}','AdminController\Pages\TariController@destroy');
Route::get('tari/{id}','AdminController\Pages\TariController@show');

Route::get('tari','AdminController\Pages\TariController@index');
Route::get('tari/create','AdminController\Pages\TariController@create');
Route::post('tari','AdminController\Pages\TariController@store');

Route::get('tari/{id}/edit','AdminController\Pages\TariController@edit');
Route::PATCH('tari/{id}/edit','AdminController\Pages\TariController@update');
Route::post('tari/{id}/edit','AdminController\Pages\TariController@update');

Route::get('tari/destroy/{id}','AdminController\Pages\TariController@destroy');
Route::get('tari/{id}','AdminController\Pages\TariController@show');

//--------------------Sectiune Pagini Regiuni--------------------//
Route::get('regiuni','AdminController\Pages\RegiuniController@index');
Route::get('regiuni/create','AdminController\Pages\RegiuniController@create');
Route::post('regiuni','AdminController\Pages\RegiuniController@store');

Route::get('regiuni/{id}/edit','AdminController\Pages\RegiuniController@edit');
Route::PATCH('regiuni/{id}/edit','AdminController\Pages\RegiuniController@update');
Route::post('regiuni/{id}/edit','AdminController\Pages\RegiuniController@update');

Route::get('regiuni/destroy/{id}','AdminController\Pages\RegiuniController@destroy');
Route::get('regiuni/{id}','AdminController\Pages\RegiuniController@show');

Route::get('regiuni','AdminController\Pages\RegiuniController@index');
Route::get('regiuni/create','AdminController\Pages\RegiuniController@create');
Route::post('regiuni','AdminController\Pages\RegiuniController@store');

Route::get('regiuni/{id}/edit','AdminController\Pages\RegiuniController@edit');
Route::PATCH('regiuni/{id}/edit','AdminController\Pages\RegiuniController@update');
Route::post('regiuni/{id}/edit','AdminController\Pages\RegiuniController@update');

Route::get('regiuni/destroy/{id}','AdminController\Pages\RegiuniController@destroy');
Route::get('regiuni/{id}','AdminController\Pages\RegiuniController@show');