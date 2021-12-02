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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/opciones', 'App\Http\Controllers\OpcionesController@index');
Route::post('/opciones', 'App\Http\Controllers\OpcionesController@store');
Route::put('/opciones/{id}', 'App\Http\Controllers\OpcionesController@update');
Route::delete('/opciones/{id}', 'App\Http\Controllers\OpcionesController@destroy');

Route::get('/todo', 'App\Http\Controllers\TodoController@index');
Route::post('/todo', 'App\Http\Controllers\TodoController@store');
Route::put('/todo/{id}', 'App\Http\Controllers\TodoController@update');
Route::delete('/todo/{id}', 'App\Http\Controllers\TodoController@destroy');