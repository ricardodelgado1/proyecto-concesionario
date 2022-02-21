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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'App\\Http\\Controllers\\HomeController@getHome');

/* Route::get('/inicio', function(){
    return view('inicio');
}); */
Route::get('/contacto', function(){
    return view('contacto');
});
Route::get('/motos', function(){
    return view('motos');
});
Route::get('serviciotecnico', function(){
    return view('servicios.serviciotecnico');
});
Route::get('repuestos', function(){
    return view('servicios.repuestos');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('foo', 'motos\MotosController@method');

