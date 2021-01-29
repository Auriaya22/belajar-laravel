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
Route::get('/', 'PertanyaanController@index');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');

// Route::get('/data-tables', function () {return view('data');});
// Route::get('/home', 'HomeController@index');
// route untuk form dan register
// Route::get('/register', 'AuthController@form');
// Route::post('/register', 'AuthController@register');
// Route::get('welcome', function () {return view('welcome');});
