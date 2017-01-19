<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/users', 'UserController');
Route::get('/admin_home', 'AdminHomeController@index');
Route::get('/admin_login', 'AdminAuth\LoginController@showLoginForm');
Route::post('/admin_login', 'AdminAuth\LoginController@login');
Route::post('/admin_logout', 'AdminAuth\LoginController@logout');
Route::get('/register/verify/{confirmationCode}', 'Auth\RegisterController@confirm');
Route::get('{path}', function() {
    return view('index');
})->where('path', '(.*)?');
