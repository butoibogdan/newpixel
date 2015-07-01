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

    Route::group(['prefix' => 'admin/continente'], function() {

        Route::get('/', 'AdminController\Pages\ContinenteController@index');
        Route::get('create', 'AdminController\Pages\ContinenteController@create');
        Route::post('/', 'AdminController\Pages\ContinenteController@store');

        Route::get('edit/{id}', 'AdminController\Pages\ContinenteController@edit');
        Route::PATCH('edit/{id}', 'AdminController\Pages\ContinenteController@update');

        Route::get('destroy/{id}', 'AdminController\Pages\ContinenteController@destroy');
        Route::get('/{id}', 'AdminController\Pages\ContinenteController@show');
    });

//--------------------Sectiune Pagini Tari--------------------//

    Route::group(['prefix' => 'admin/tari'], function() {

        Route::get('/', 'AdminController\Pages\TariController@index');
        Route::get('create', 'AdminController\Pages\TariController@create');
        Route::post('/', 'AdminController\Pages\TariController@store');

        Route::get('edit/{id}', 'AdminController\Pages\TariController@edit');
        Route::PATCH('edit/{id}', 'AdminController\Pages\TariController@update');

        Route::get('destroy/{id}', 'AdminController\Pages\TariController@destroy');
        Route::get('/{id}', 'AdminController\Pages\TariController@show');

        Route::get('delimgid/{id}', 'AdminController\Pages\TariController@deleteimg');
        Route::get('setimgid/{idt}/{id}', 'AdminController\Pages\TariController@status');
    });


//--------------------Sectiune Pagini Regiuni--------------------//

    Route::group(['prefix' => 'admin/regiuni'], function() {

        Route::get('/', 'AdminController\Pages\RegiuniController@index');
        Route::get('create', 'AdminController\Pages\RegiuniController@create');
        Route::post('/', 'AdminController\Pages\RegiuniController@store');

        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'AdminController\Pages\RegiuniController@edit']);
        Route::PATCH('edit/{id}', 'AdminController\Pages\RegiuniController@update');

        Route::get('destroy/{id}', 'AdminController\Pages\RegiuniController@destroy');
        Route::get('/{id}', ['as' => 'showreg', 'uses' => 'AdminController\Pages\RegiuniController@show']);
    });


    //--------------------Sectiune Pagini Localitati--------------------//

    Route::group(['prefix' => 'admin/localitati'], function() {

        Route::get('/', 'AdminController\Pages\LocalitatiController@index');
        Route::get('create', 'AdminController\Pages\LocalitatiController@create');
        Route::post('/', 'AdminController\Pages\LocalitatiController@store');

        Route::get('edit/{id}', 'AdminController\Pages\LocalitatiController@edit');
        Route::PATCH('edit/{id}', 'AdminController\Pages\LocalitatiController@update');

        Route::get('destroy/{id}', 'AdminController\Pages\LocalitatiController@destroy');
        Route::get('/{id}', 'AdminController\Pages\LocalitatiController@show');

        Route::get('delimglocid/{id}', 'AdminController\Pages\LocalitatiController@deleteimg');
        Route::get('setimglocid/{idt}/{id}', 'AdminController\Pages\LocalitatiController@status');
    });


    //--------------------Sectiune Pagini Hoteluri--------------------//

    Route::group(['prefix' => 'admin/hoteluri'], function() {

        Route::get('/', 'AdminController\Pages\HoteluriController@index');
        Route::get('create', 'AdminController\Pages\HoteluriController@create');
        Route::post('/', 'AdminController\Pages\HoteluriController@store');

        Route::get('edit/{id}', 'AdminController\Pages\HoteluriController@edit');
        Route::PATCH('edit/{id}', 'AdminController\Pages\HoteluriController@update');
        Route::post('edit/{id}', 'AdminController\Pages\HoteluriController@update');

        Route::get('destroy/{id}', 'AdminController\Pages\HoteluriController@destroy');
        Route::get('/{id}', 'AdminController\Pages\HoteluriController@show');

        Route::get('delimghotelid/{id}', 'AdminController\Pages\HoteluriController@deleteimg');
        Route::get('setimghotelid/{idt}/{id}', 'AdminController\Pages\HoteluriController@status');

        Route::post('create/localitati', 'AdminController\Pages\HoteluriController@localitati');
        Route::post('create/reg', 'AdminController\Pages\HoteluriController@regiuni');
    });

    //--------------------Sectiune Pagini Facilitati--------------------//

    Route::group(['prefix' => 'admin/facilitati'], function() {

        Route::get('/', 'AdminController\Pages\FacilitatiController@index');

        Route::get('create', 'AdminController\Pages\FacilitatiController@create');
        Route::post('/', 'AdminController\Pages\FacilitatiController@store');

        Route::get('edit/{id}', ['as' => 'editfacilitati', 'uses' => 'AdminController\Pages\FacilitatiController@edit']);
        Route::PATCH('edit/{id}', 'AdminController\Pages\FacilitatiController@update');

        Route::get('destroy/{id}', 'AdminController\Pages\FacilitatiController@destroy');
        Route::get('/{id}', ['as' => 'showfacilitati', 'uses' => 'AdminController\Pages\FacilitatiController@show']);
    });

    //--------------------Sectiune Pagini Oferte--------------------//

    Route::group(['prefix' => 'admin/oferte'], function() {

        Route::get('/', 'AdminController\Pages\OfertestaticeController@index');

        Route::get('create', 'AdminController\Pages\OfertestaticeController@create');
        Route::post('/', 'AdminController\Pages\OfertestaticeController@store');

        Route::get('edit/{id}', ['as' => 'ofertestatice', 'uses' => 'AdminController\Pages\OfertestaticeController@edit']);
        Route::PATCH('edit/{id}', 'AdminController\Pages\OfertestaticeController@update');

        Route::get('destroy/{id}', 'AdminController\Pages\OfertestaticeController@destroy');
        Route::get('/{id}', ['as' => 'showoferte', 'uses' => 'AdminController\Pages\OfertestaticeController@show']);

        Route::get('deloferta/{id}', 'AdminController\Pages\OfertestaticeController@deloferta');
    });

    //--------------------Sectiune Pagini Clienti--------------------//

    Route::group(['prefix' => 'admin/clienti'], function() {

        Route::get('/', 'AdminController\Pages\ClientiController@index');

        Route::get('create', 'AdminController\Pages\ClientiController@create');
        Route::post('/', 'AdminController\Pages\ClientiController@store');

        Route::get('edit/{id}', ['as' => 'editclienti', 'uses' => 'AdminController\Pages\ClientiController@edit']);
        Route::PATCH('edit/{id}', 'AdminController\Pages\ClientiController@update');

        Route::get('destroy/{id}', 'AdminController\Pages\ClientiController@destroy');
        Route::get('/{id}', ['as' => 'showclienti', 'uses' => 'AdminController\Pages\ClientiController@show']);
    });

    //--------------------Sectiune Pagini Facturi--------------------//


    Route::group(['prefix' => 'admin/facturi'], function() {

        Route::get('/', 'AdminController\Pages\FacturiController@index');

        Route::get('create', 'AdminController\Pages\FacturiController@create');
        Route::post('/', 'AdminController\Pages\FacturiController@store');

        Route::get('edit/{id}', ['as' => 'editfacturi', 'uses' => 'AdminController\Pages\FacturiController@edit']);
        Route::PATCH('edit/{id}', 'AdminController\Pages\FacturiController@update');

        Route::get('destroy/{id}', 'AdminController\Pages\FacturiController@destroy');
        Route::get('/{id}', ['as' => 'showfacturi', 'uses' => 'AdminController\Pages\FacturiController@show']);
    });

    //--------------------Sectiune Pagini Facturi--------------------//

    Route::group(['prefix' => 'admin/facturiproduse'], function() {

        Route::get('/', 'AdminController\Pages\FacturiController@index');

        Route::get('create', 'AdminController\Pages\FacturiController@create');
        Route::post('/', 'AdminController\Pages\FacturiController@store');

        Route::get('edit/{id}', ['as' => 'editfacturi', 'uses' => 'AdminController\Pages\FacturiController@edit']);
        Route::PATCH('edit/{id}', 'AdminController\Pages\FacturiController@update');

        Route::get('destroy/{id}', 'AdminController\Pages\FacturiController@destroy');
        Route::get('/{id}', ['as' => 'showfacturi', 'uses' => 'AdminController\Pages\FacturiController@show']);
    });
});



//--------------------Sectiune Logout--------------------//
Route::get('logout', 'AdminController\HomeAdmin@logout');

Route::get('invoice', function() {
    return view('administrare.invoicetpl');
});





