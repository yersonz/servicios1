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

Route::view("/ingreso-proveedor","ingresarProveedor");
Route::post("/ingresar-proveedor",[ProveedorController::class,"guardar"]);

Route::view("/ingreso-servicios","servicios");

Route::get("/mostrar-proveedor",[ProveedorController::class,"mostrar"]);
