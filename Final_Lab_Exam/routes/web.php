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


Route::get('/', 'UsersController@login');
Route::post('/', 'UsersController@verifyLogin');
Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@verifyLogin');
Route::get('/logout', 'LogoutController@index');

Route::group(['middleware'=>['profile']], function(){
    Route::get('/adminHome', 'UsersController@adminHome')->name('users.admin.home');
    Route::get('/usersCreate', 'UsersController@create')->name('users.admin.create');
    Route::post('/usersCreate', 'UsersController@store')->name('users.admin.create');
    Route::get('/userAdminEdit/{id}', 'UsersController@edit')->name('users.admin.edit');
    Route::post('/userAdminEdit/{id}', 'UsersController@update')->name('users.admin.edit');
    Route::get('/userAdminDelete/{id}', 'UsersController@destroy')->name('users.admin.delete');
    Route::get('/userAdminSearch', 'UsersController@search')->name('users.admin.search');

    
    Route::get('/employeeHome', 'ProductsController@employeeHome')->name('products.employee.home');
    Route::get('/productsCreate', 'ProductsController@create')->name('products.employee.create');
    Route::post('/productsCreate', 'ProductsController@store')->name('products.employee.create');
    Route::get('/productEmployeeEdit/{id}', 'ProductsController@edit')->name('products.employee.edit');
    Route::post('/productEmployeeEdit/{id}', 'ProductsController@update')->name('products.employee.edit');
    Route::get('/productEmployeeDelete/{id}', 'ProductsController@destroy')->name('products.employee.delete');
});
