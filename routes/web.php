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

Route::get('/about', 'PageController@about')->name('about');

Auth::routes();
Route::get('/', 'PageController@welcome')->name('welcome');


Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/user/home', 'User\HomeController@index')->name('user.home');


Route::get('/admin/pubs', 'Admin\PubController@index')->name('admin.pubs.index'); //list of pubs
Route::get('/admin/pubs/create', 'Admin\PubController@create')->name('admin.pubs.create'); //creating pubs method
Route::get('/admin/pubs/{id}', 'Admin\PubController@show')->name('admin.pubs.show'); //get pub by id
Route::post('/admin/pubs/store', 'Admin\PubController@store')->name('admin.pubs.store'); //stores newly updated pub
Route::get('/admin/pubs/{id}/edit', 'Admin\PubController@edit')->name('admin.pubs.edit'); //edit existing pub by id
Route::put('/admin/pubs/{id}', 'Admin\PubController@update')->name('admin.pubs.update'); //update existing pub by id
Route::delete('/admin/pubs/{id}/destroy', 'Admin\PubController@destroy')->name('admin.pubs.destroy'); //delete existing pub id


Route::get('/user/pubs', 'User\PubController@index')->name('user.pubs.index');
Route::get('/user/pubs/{id}', 'User\PubController@index')->name('user.pubs.show');
