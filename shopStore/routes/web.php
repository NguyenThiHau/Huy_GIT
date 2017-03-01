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

//Route::get('product', 'ProductController@index');
//Route::resource('product', 'ProductController');
Route::get('upload', 'UploadController@index');
Route::get('upload/create', 'UploadController@create');
Route::post('upload', 'UploadController@store');
