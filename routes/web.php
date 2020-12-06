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

Route::get('/', function(){
	echo "index page";
});


Route::get('/login', 'App\Http\Controllers\loginController@index');
Route::post('/login', 'App\Http\Controllers\loginController@verify');

Route::get('/home', 'App\Http\Controllers\homeController@index');
Route::get('/logout', 'App\Http\Controllers\logoutController@index');

Route::get('/create', 'App\Http\Controllers\homeController@create');
Route::post('/create', 'App\Http\Controllers\homeController@insert');

Route::get('/stdlist', 'App\Http\Controllers\homeController@stdlist');
Route::get('/details/{id}', 'App\Http\Controllers\homeController@details');

Route::get('/edit/{id}', 'App\Http\Controllers\homeController@edit');
Route::post('/edit/{id}', 'App\Http\Controllers\homeController@update');

Route::get('/delete/{id}', 'App\Http\Controllers\homeController@delete');
Route::post('/delete/{id}', 'App\Http\Controllers\homeController@destroy');

