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


Auth::routes();
Route::get('/logout', function () {
    return redirect("/");
});
Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'auth'], function () {
    //NHUNG LINK NAO DAT TRONG NAY THI PHAI LOGIN QUYEN USER

    Route::group(['middleware' => 'admin'], function () {
        //NHUNG LINK NAO DAT TRONG NAY THI PHAI LOGIN QUYEN ADMIN
        Route::get('admin', function () {
            return view('admin.dashboard');
        });
        Route::resource('admin/category', 'Admin\\CategoryController');
        Route::resource('admin/image', 'Admin\\ImageController');
    });
});
