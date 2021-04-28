<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// marca
Route::get('/marca',[\App\Http\Controllers\MarcaController::class, 'index'])->name('marca.index');
Route::post('/marcas',[\App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Route::get('/marca/{marca}/edit',[\App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Route::put('/marca/{marca}',[\App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');

// categoria
Route::get('/categoria',[\App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria.index');
Route::post('/categorias',[\App\Http\Controllers\CategoriaController::class, 'store'])->name('categoria.store');
Route::get('/categoria/{categoria}/edit',[\App\Http\Controllers\CategoriaController::class, 'edit'])->name('categoria.edit');

//producto
Route::get('/producto',[\App\Http\Controllers\ProductoController::class,'index'])->name('producto.index');
Route::get('/producto/create',[\App\Http\Controllers\ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto',[App\Http\Controllers\ProductoController::class,'store'])->name('producto.store');
Route::get('/producto/{producto}/edit',[\App\Http\Controllers\ProductoController::class,'edit'])->name('producto.edit');
Route::put('/producto/{producto}',[\App\Http\Controllers\ProductoController::class,'update'])->name('producto.update');
Route::delete('/productos/{producto}',[\App\Http\Controllers\ProductoController::class, 'destroy'])->name('producto.destroy');
// ajax en producto
Route::get('ajax/producto',[\App\Http\Controllers\AjaxController::class,'datatable'])->name('ajax.datatable');
/* Route::get(' ',[\App\Http\Controllers\AjaxController::class,'eliminar'])->name('ajax.eliminar'); */

// subir imagenes
Route::post('/imagen',[\App\Http\Controllers\ImagenController::class,'store'])->name('imagen.store');