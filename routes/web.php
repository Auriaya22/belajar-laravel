<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// route ke index
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
// route untuk form dan register
Route::get('/register', 'AuthController@form');
Route::post('/register', 'AuthController@register');
// Route::get('welcome', function () {return view('welcome');});
