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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::auth();

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/valid-mails', 'ValidMailController@index');
Route::post('/valid-mails', 'ValidMailController@store');
Route::get('/donate', 'HomeController@donate');

Route::get('/admin/users', 'AdminController@showRegisteredUsers');
Route::post('admin/users/edit', 'AdminController@editRegisteredUsersRoles');

Route::resource('/material','MaterialController');
Route::resource('/story', 'StoryController');