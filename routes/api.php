<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->group( function () {
	Route::post('updatemn', 'API\Apicontroller@updatemn');
	Route::post('delete', 'API\Apicontroller@delete');
    Route::get('/userdetail', 'API\Apicontroller@userdetail');
    Route::post('/sendlog', 'API\Apicontroller@Logdata');

    // transfertoapi
});



