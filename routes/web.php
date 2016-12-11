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
    return view('welcome');
});
Route::get('kompetisi', ['uses'=>'KompetisiController@index', 'as'=>'kompetisi.index']);
Route::get('kompetisi/daftar', ['uses'=>'KompetisiController@daftar', 'as'=>'kompetisi.daftar']);
Route::post('kompetisi/daftar', ['uses'=>'KompetisiController@store', 'as'=>'kompetisi.store']);

Route::get('tiket', ['uses'=>'TiketController@index', 'as'=>'tiket.index']);


Route::get('koleksi', ['uses'=>'KoleksiController@index', 'as'=>'koleksi.index']);

Route::get('publikasi', ['uses'=>'PublikasiController@index', 'as'=>'publikasi.index']);
Route::get('publikasi/order', ['uses'=>'PublikasiController@order', 'as'=>'publikasi.order']);
Route::post('publikasi/order', ['uses'=>'PublikasiController@postOrder', 'as'=>'publikasi.postOrder']);


Route::get('about', ['uses'=>'AboutController@index', 'as'=>'about.index']);

Route::get('visit', ['uses'=>'VisitController@index', 'as'=>'visit.index']);
