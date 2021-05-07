<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProveedorController;

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

Route::view("/", "layout");
Route::view("/ingreso-usuario","ingresarUsuario");
Route::post("/ingresar-usuario",[UsuarioController::class,"guardar"]);
Route::get("/mostrar-usuario",[UsuarioController::class,"mostrar"]);
Route::get("/actualizar-usuario/{id}",[UsuarioController::class,"mostrarUsu"]);
Route::post("/actualizar-usuario",[UsuarioController::class,"actualizar"]);
Route::delete("/eliminar-usuario/{id}",[UsuarioController::class,"eliminar"])->name("eliminar");



Route::view("/ingreso-proveedor","ingresarProveedor");
Route::post("/ingresar-proveedor",[ProveedorController::class,"guardar"]);

Route::view("/ingreso-servicios","servicios");

Route::get("/mostrar-proveedor",[ProveedorController::class,"mostrar"]);
Route::get("/actualizar-proveedor/{id}",[ProveedorController::class,"mostrarProveedor"]);
Route::post("/actualizar-proveedor",[ProveedorController::class,"actualizar"]);

Route::delete("/eliminar-proveedor/{id}",[ProveedorController::class,"eliminar"])->name("eliminar");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
