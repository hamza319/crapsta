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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Hamza routes
Route::view('test','details')->name('details');

//Pascal routes
Route::get('/profile', function(){
	return view('profile');
})->name('profile');

Route::get('/search', function(){
	return view('search');
})->name('search');
