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
Auth::routes();
Route::get('/', 'PertanyaanController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
// controller resource routes
Route::resource('pertanyaan', 'PertanyaanController');
Route::resource('tag', 'TagController');
