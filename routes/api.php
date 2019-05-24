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

Route::get('/ban', 'BanController@getAll');
Route::get('/ban/{id}', 'BanController@show');
Route::post('/ban', 'BanController@store');
Route::delete('/ban/{id}', 'BanController@delete');

Route::get('/games', 'GameController@getAll');
Route::get('/reasons', 'ReasonController@getAll');
