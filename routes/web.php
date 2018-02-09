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

Route::get('/', 'PagesController@index');
Route::get('/location', 'PagesController@location');
Route::get('/contact', 'PagesController@contact');

Route::resource('vehicles', 'VehiclesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/images/{id}', 'UploadController@uploadForm');
Route::post('/images/{id}', 'UploadController@uploadSubmit');
Route::delete('/images/{id}', 'UploadController@uploadDestroy');
Route::put('/images/{id}', 'UploadController@uploadUpdate');
