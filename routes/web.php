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

Route::get('/', function () {
    return view('home_component.index');
});

Route::get('/user/dashboard', 'UserController@dashboard');
Route::get('/user/logout', 'UserController@destroy');
Route::get('/user/login', 'UserController@index')->name('home');
Route::post('/user/login', 'UserController@dologin');

Route::get('/berita', 'BeritaController@index');
Route::post('/berita/kirim', 'BeritaController@kirim');