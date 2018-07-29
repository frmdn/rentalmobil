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

Route::get('/', 'MobilController@show');
Route::get('/list',function() {
	$data = \App\Mobil::all();
	return view('public.list', compact('data'));
});

Route::get('/admin', 'MobilController@GetData')->name('dashboard');

Route::get('/input',function() {
	return view('public.input');
});

Route::post('/upload','MobilController@SaveData')->name('image.upload');