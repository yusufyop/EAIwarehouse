<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/inbound', 'App\Http\Controllers\InboundController@index');
Route::post('/inbound', 'App\Http\Controllers\InboundController@create');
Route::put('/inbound/{id_inbound}', 'App\Http\Controllers\InboundController@update');
Route::delete('/inbound/{id_inbound}', 'App\Http\Controllers\InboundController@delete');

