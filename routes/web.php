<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admin_controller;
use App\Http\Controllers\CartaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\MenuComidasController;
use App\Http\Controllers\OrderController;

// Route::get('/',Logincontroller::class);
Route::get('/', function () {
    return view('auth.login');
});

Route::get('administrador/inicio',[Admin_controller::class,'index']);
Route::get('administrador/empleados',[Admin_controller::class,'employees']);
Route::get('administrador/menu_comidas',[Admin_controller::class,'food_menu']);
Route::get('administrador/inventorias',[Admin_controller::class,'inventories']);
Route::get('administrador/ventas',[Admin_controller::class,'sale']);
Route::get('administrador/subscriber',[Admin_controller::class,'subscriber']);
Route::get('administrador/pedidos',[Admin_controller::class,'orders']);
Route::get('administrador/provedores',[Admin_controller::class,'suppliers']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/MenuComidas', [MenuComidasController::class, 'MenuComida'])->name('MenuComida');

Route::get('/carta', [CartaController::class, 'carta'])->name('carta');
Route::get('/carta/delete-{id}',[CartaController::class,'delete'])->name('delete');

Route::post('detail/store',[DetailController::class,'store'])->name('detail.store');
Route::post('/create-order', [OrderController::class, 'createOrder'])->name('order.create');
