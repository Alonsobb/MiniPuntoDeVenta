<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use App\Http\Controllers\POS;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Ventas;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('login');
}); */

Route::get('/', [Login::class, 'view'])->name('login.view');

Route::get('/logout', [Login::class, 'logout'])->name('logout');

Route::post('/login', [Login::class, 'login'])->name('login');

Route::get('/home', [Home::class, 'home'])->name('home');



Route::get('/POS', [POS::class, 'view'])->name('pos.view');
Route::get('/Ventas', [Ventas::class, 'view'])->name('ventas.view');
Route::get('/Productos', [Productos::class, 'view'])->name('productos.view');

Route::get('/AgregarProducto', [Productos::class, 'agregarproducto'])->name('agregar.producto');
Route::post('/AgregarProducto', [Productos::class, 'agregarproductopost'])->name('agregar.producto.post');





