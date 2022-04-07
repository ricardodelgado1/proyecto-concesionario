<?php
use App\Http\Controllers\API\APIMotosController;
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

Route::get('/v1/motos', 'API\APIMotosController@index');

Route::get('/v1/motos/{id}', 'API\APIMotosController@show');

Route::post('/v1/motos', 'API\APIMotosController@store')->middleware('auth.basic');

Route::put('/v1/motos/{id}', 'API\APIMotosController@update')->middleware('auth.basic');

Route::delete('/v1/motos/{id}', 'API\APIMotosController@destroy')->middleware('auth.basic');

Route::put('/v1/motos/{id}/reservar', 'API\APIMotosController@putReservar')->middleware('auth.basic');

Route::put('/v1/motos/{id}/noreservar', 'API\APIMotosController@putNoReservar')->middleware('auth.basic');

