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

// Route::get('/',);
Route::get('/index', function () {
    return view('index');
});
Route::get('/promote', function () {
    return view('promote');
});
Route::get('/lobby', function () {
    return view('lobby');
});
Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'MasterController@welcome')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logoutuser');