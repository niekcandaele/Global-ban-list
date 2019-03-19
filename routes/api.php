<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/server', 'ServerController@getall');
Route::get('/server/{id}', 'ServerController@show');

Route::get('/ban', 'BanController@getall');
Route::get('/ban/{id}', 'BanController@show');

Route::post('/ban', 'BanController@store');