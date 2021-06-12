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
Route::put('/inbound/{inbound_id}', 'App\Http\Controllers\InboundController@update');
Route::delete('/inbound/{inbound_id}', 'App\Http\Controllers\InboundController@delete');

Route::get('/outbound', 'App\Http\Controllers\OutboundController@index');
Route::post('/outbound', 'App\Http\Controllers\OutboundController@create');
Route::put('/outbound/{outbound_id}', 'App\Http\Controllers\OutboundController@update');
Route::delete('/outbound/{outbound_id}', 'App\Http\Controllers\OutboundController@delete');

Route::get('/maintenance', 'App\Http\Controllers\MaintenanceController@index');
Route::post('/maintenance', 'App\Http\Controllers\MaintenanceController@create');
Route::put('/maintenance/{maintenance_id}', 'App\Http\Controllers\MaintenanceController@update');
Route::delete('/maintenance/{maintenance_id}', 'App\Http\Controllers\MaintenanceController@delete');

Route::get('/stock', 'App\Http\Controllers\StockController@index');
Route::post('/stock', 'App\Http\Controllers\StockController@create');
Route::put('/stock/{stock_id}', 'App\Http\Controllers\StockController@update');
Route::delete('/stock/{stock_id}', 'App\Http\Controllers\StockController@delete');

Route::get('/warehouse', 'App\Http\Controllers\WarehouseController@index');
Route::post('/warehouse', 'App\Http\Controllers\WarehouseController@create');
Route::put('/warehouse/{warehouse_id}', 'App\Http\Controllers\WarehouseController@update');
Route::delete('/warehouse/{warehouse_id}', 'App\Http\Controllers\WarehouseController@delete');

Route::get('/operational', 'App\Http\Controllers\OperationalController@index');
Route::post('/operational', 'App\Http\Controllers\OperationalController@create');
Route::put('/operational/{operational_id}', 'App\Http\Controllers\OperationalController@update');
Route::delete('/operational/{operational_id}', 'App\Http\Controllers\OperationalController@delete');
