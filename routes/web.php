<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\UsersClienteController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('carritos', CarritoController::class);

Route::resource('users-clientes', UsersClienteController::class);

Route::resource('productos', ProductoController::class);

Route::resource('tiendas', TiendaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
