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
    return view('welcome');
});


// Authentication routes...
Route::get('/login', [
    'as'    => 'login',
    'uses'  => 'Auth\AuthController@getLogin'
]);

Route::post('/login',  [
    'as'    => 'login',
    'uses'  => 'Auth\AuthController@postLogin'
]);

Route::get('/logout',  [
    'as'    => 'logout',
    'uses'  => 'Auth\AuthController@getLogout'
]);

// Registration routes...
Route::get('/register', [
    'as'    =>   'register',
    'uses'  =>   'Auth\AuthController@getRegister'
]);

Route::post('/register', [
    'as'    => 'register',
    'uses'  => 'Auth\AuthController@postRegister'
]);

Route::get('/dashboard', [
    'as'    => 'dashboard',
    'uses'  => 'DashboardController@index'
]);