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
//href
Route::get('/', function (){
	return view("table");
});
Route::get('/form', function (){
	return view("form");
});
// Route::get('/nama/{nama}', 'BarangController@getNama');
// Route::get('/alamat', 'BarangController@getAlamat');
// Route::get('/index');

//href