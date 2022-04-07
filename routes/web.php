<?php
use App\Http\livewire\Shop\IndexComponent;
use App\Http\Controllers\MotosController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\RepuestosController;
use App\Http\Controllers\ContactosController;
use Illuminate\Support\Facades\Auth;

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



//Route::get('/', 'App\\Http\\Controllers\\HomeController@getHome');


Auth::routes();

Route::get('/carro', [App\Http\livewire\Shop\IndexComponent::class, 'index']);




Route::get('/', [App\Http\Controllers\HomeController::class, 'getHome'])->name('inicio');

//Route::get('/contacto', [App\Http\Controllers\ContactController::class, 'getContact'])->name('contacto');




Route::get('/sobrenosotros', [App\Http\Controllers\ContactController::class, 'getNosotros'])->name('sobrenosotros');

Route::get('/motos', [App\Http\Controllers\MotosController::class, 'getIndex'])->name('motos');

Route::get('/motos/show/{id}', [App\Http\Controllers\MotosController::class, 'getShow'])->name('motos/show/{id}');

Route::get('/serviciotecnico', [App\Http\Controllers\ServiceController::class, 'getMantenimiento'])->name('serviciotecnico');

Route::get('/repuestos', [App\Http\Controllers\RepuestosController::class, 'getIndex'])->name('repuestos');
Route::get('/repuestos/show/{id}', [App\Http\Controllers\RepuestosController::class, 'getShow'])->name('repuestos/show/{id}');


//Route::get('/contacto', 'App\\Http\\Controllers\\ContactController@getContact');
//Route::get('/sobrenosotros', 'App\\Http\\Controllers\\ContactController@getNosotros');
//Route::get('/motos', 'App\\Http\\Controllers\\MotosController@getIndex');

//Route::get('motos/show/{id}', 'App\\Http\\Controllers\\MotosController@getShow');

Route::get('motos/create', 'App\\Http\\Controllers\\MotosController@getCreate');
Route::post('motos/create', 'App\\Http\\Controllers\\MotosController@addMoto');

//Route::get('motos/pedido', 'MotosController@getPedido');
Route::put('motos/carrito/{id}', 'MotosController@add_to_cart');
Route::get('motos/carrito', 'MotosController@index_cart');
Route::delete('motos/carrito/{id}', 'MotosController@delete_cart');
Route::put('motos/carrito', 'MotosController@update_quantity');
Route::get('motos/carrito/factura', 'MotosController@factura');

Route::put('motos/reservar/{id}','MotosController@putReservar');
Route::put('motos/noreservar/{id}','MotosController@putNoreservar');

Route::get('repuestos/pedido', 'App\\Http\\Controllers\\RepuestosController@getPedido');
Route::put('repuestos/reservar/{id}','App\\Http\\Controllers\\RepuestosController@putReservar');
Route::put('repuestos/noreservar/{id}','App\\Http\\Controllers\\RepuestosController@putNoreservar');

Route::prefix('contactos')->group(function(){
    Route::get('/', [App\Http\Controllers\ContactosController::class, 'index'])->name('contactos.index');
    Route::get('/agregar', [App\Http\Controllers\ContactosController::class, 'create'])->name('contactos.create');
    Route::get('/editar/{id}', [App\Http\Controllers\ContactosController::class, 'edit'])->name('contactos.edit');
    Route::get('/eliminar/{id}', [App\Http\Controllers\ContactosController::class, 'show'])->name('contactos.show');
    Route::post('/guardar', [App\Http\Controllers\ContactosController::class, 'store'])->name('contactos.store');
    Route::put('/actualizar/{id}', [App\Http\Controllers\ContactosController::class, 'update'])->name('contactos.update');
    Route::delete('/destruir/{id}', [App\Http\Controllers\ContactosController::class, 'destroy'])->name('contactos.destroy');
});
 /*   Route::get('motos/edit/{id}', 'App\\Http\\Controllers\\MotosController@getEdit');
 */


//Route::get('/serviciotecnico', 'App\\Http\\Controllers\\ServiceController@getMantenimiento');




















//Route::get('/', 'App\\Http\\Controllers\\HomeController@getHome');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


