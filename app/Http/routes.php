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
Route::group(array('middleware' => 'auth'), function() {
    Route::get('admin', 'AdminController\DashboardAdmin@index');


//--------------------Sectiune Pagini Continente--------------------//
    Route::get('admin/continente', 'AdminController\Pages\ContinenteController@index');
    Route::get('admin/continente/create', 'AdminController\Pages\ContinenteController@create');
    Route::post('admin/continente', 'AdminController\Pages\ContinenteController@store');

    Route::get('admin/continente/{id}/edit', 'AdminController\Pages\ContinenteController@edit');
    Route::PATCH('admin/continente/{id}/edit', 'AdminController\Pages\ContinenteController@update');
    Route::post('admin/continente/{id}/edit', 'AdminController\Pages\ContinenteController@update');

    Route::get('admin/continente/destroy/{id}', 'AdminController\Pages\ContinenteController@destroy');
    Route::get('admin/continente/{id}', 'AdminController\Pages\ContinenteController@show');

//--------------------Sectiune Pagini Tari--------------------//
    Route::get('admin/tari', 'AdminController\Pages\TariController@index');
    Route::get('admin/tari/create', 'AdminController\Pages\TariController@create');
    Route::post('admin/tari', 'AdminController\Pages\TariController@store');

    Route::get('admin/tari/{id}/edit', 'AdminController\Pages\TariController@edit');
    Route::PATCH('admin/tari/{id}/edit', 'AdminController\Pages\TariController@update');
    Route::post('admin/tari/{id}/edit', 'AdminController\Pages\TariController@update');

    Route::get('admin/tari/destroy/{id}', 'AdminController\Pages\TariController@destroy');
    Route::get('admin/tari/{id}', 'AdminController\Pages\TariController@show');

    Route::get('admin/tari', 'AdminController\Pages\TariController@index');
    Route::get('admin/tari/create', 'AdminController\Pages\TariController@create');
    Route::post('admin/tari', 'AdminController\Pages\TariController@store');

    Route::get('admin/tari/{id}/edit', 'AdminController\Pages\TariController@edit');
    Route::PATCH('admin/tari/{id}/edit', 'AdminController\Pages\TariController@update');
    Route::post('admin/tari/{id}/edit', 'AdminController\Pages\TariController@update');

    Route::get('admin/tari/destroy/{id}', 'AdminController\Pages\TariController@destroy');
    Route::get('admin/tari/{id}', 'AdminController\Pages\TariController@show');
    
    Route::get('admin/delimgid/{id}','AdminController\Pages\TariController@deleteimg');
    Route::get('admin/setimgid/{idt}/{id}','AdminController\Pages\TariController@status');

//--------------------Sectiune Pagini Regiuni--------------------//
    Route::get('admin/regiuni', 'AdminController\Pages\RegiuniController@index');
    Route::get('admin/regiuni/create', 'AdminController\Pages\RegiuniController@create');
    Route::post('admin/regiuni', 'AdminController\Pages\RegiuniController@store');

    Route::get('admin/regiuni/{id}/edit', 'AdminController\Pages\RegiuniController@edit');
    Route::PATCH('admin/regiuni/{id}/edit', 'AdminController\Pages\RegiuniController@update');
    Route::post('admin/regiuni/{id}/edit', 'AdminController\Pages\RegiuniController@update');

    Route::get('admin/regiuni/destroy/{id}', 'AdminController\Pages\RegiuniController@destroy');
    Route::get('admin/regiuni/{id}', 'AdminController\Pages\RegiuniController@show');

    Route::get('admin/regiuni', 'AdminController\Pages\RegiuniController@index');
    Route::get('admin/regiuni/create', 'AdminController\Pages\RegiuniController@create');
    Route::post('admin/regiuni', 'AdminController\Pages\RegiuniController@store');

    Route::get('admin/regiuni/{id}/edit', 'AdminController\Pages\RegiuniController@edit');
    Route::PATCH('admin/regiuni/{id}/edit', 'AdminController\Pages\RegiuniController@update');
    Route::post('admin/regiuni/{id}/edit', 'AdminController\Pages\RegiuniController@update');

    Route::get('admin/regiuni/destroy/{id}', 'AdminController\Pages\RegiuniController@destroy');
    Route::get('admin/regiuni/{id}', 'AdminController\Pages\RegiuniController@show');
    
    //--------------------Sectiune Pagini Localitati--------------------//
    Route::get('admin/localitati', 'AdminController\Pages\LocalitatiController@index');
    Route::get('admin/localitati/create', 'AdminController\Pages\LocalitatiController@create');
    Route::post('admin/localitati', 'AdminController\Pages\LocalitatiController@store');

    Route::get('admin/localitati/{id}/edit', 'AdminController\Pages\LocalitatiController@edit');
    Route::PATCH('admin/localitati/{id}/edit', 'AdminController\Pages\LocalitatiController@update');
    Route::post('admin/localitati/{id}/edit', 'AdminController\Pages\LocalitatiController@update');

    Route::get('admin/localitati/destroy/{id}', 'AdminController\Pages\LocalitatiController@destroy');
    Route::get('admin/localitati/{id}', 'AdminController\Pages\LocalitatiController@show');

    Route::get('admin/localitati', 'AdminController\Pages\LocalitatiController@index');
    Route::get('admin/localitati/create', 'AdminController\Pages\LocalitatiController@create');
    Route::post('admin/localitati', 'AdminController\Pages\LocalitatiController@store');

    Route::get('admin/localitati/{id}/edit', 'AdminController\Pages\LocalitatiController@edit');
    Route::PATCH('admin/localitati/{id}/edit', 'AdminController\Pages\LocalitatiController@update');
    Route::post('admin/localitati/{id}/edit', 'AdminController\Pages\LocalitatiController@update');

    Route::get('admin/localitati/destroy/{id}', 'AdminController\Pages\LocalitatiController@destroy');
    Route::get('admin/localitati/{id}', 'AdminController\Pages\LocalitatiController@show');
    
    Route::get('admin/delimglocid/{id}','AdminController\Pages\LocalitatiController@deleteimg');
    Route::get('admin/setimglocid/{idt}/{id}','AdminController\Pages\LocalitatiController@status');
});
//--------------------Sectiune Logout--------------------//
Route::get('logout', 'AdminController\HomeAdmin@logout');




