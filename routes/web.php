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
    return view('welcome');
});
Route::resource('mobil','MobilController');
Route::resource('galeri','galeriController');
Route::resource('customer','customerController');
Route::resource('pesanan','pesananController');

Route::get('cek',function(){
    return view('layouts.admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
