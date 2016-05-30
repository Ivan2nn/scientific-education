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

Route::get('/', function () {
    return view('basic.main');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/valid-mails', 'ValidMailController@index');
Route::post('/valid-mails', 'ValidMailController@store');

Route::resource('/material','MaterialController');
