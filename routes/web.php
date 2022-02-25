<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'App\\Http\\Controllers\\HomeController@getHome');

Route::get('/contacto', 'App\\Http\\Controllers\\ContactController@getContact');

Route::get('/sobrenosotros', 'App\\Http\\Controllers\\ContactController@getNosotros');


Route::get('/motos', 'App\\Http\\Controllers\\MotosController@getIndex');

Route::get('motos/show/{id}', 'App\\Http\\Controllers\\MotosController@getShow');

Route::get('motos/create', 'App\\Http\\Controllers\\MotosController@getCreate');
Route::post('motos/create', 'App\\Http\\Controllers\\MotosController@addMoto');
 /*   Route::get('motos/edit/{id}', 'App\\Http\\Controllers\\MotosController@getEdit');
 */


Route::get('/serviciotecnico', 'App\\Http\\Controllers\\ServiceController@getMantenimiento');

Route::get('/repuestos', 'App\\Http\\Controllers\\ServiceController@getRepuesto');



Route::get('/login', function(){
    return view('login');
});



