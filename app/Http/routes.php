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
