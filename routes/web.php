<?php

use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VueloController;
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

Route::get('/',[VueloController::class,'home'])->name('vuelo.home');
Route::get('/editarvuelo',[VueloController::class,'editar'])->name('vuelo.editar');
Route::get('/nuevovuelo',[VueloController::class,'crear'])->name('vuelo.crear');

Route::get('/tipoasiento',[TipoAsientoController::class,'home'])->name('tipoAsiento.home');
Route::get('/agregartipoasiento',[TipoAsientoController::class,'crear'])->name('tipoAsiento.crear');
Route::post('/actualizartipoasiento',[TipoAsientoController::class,'actualizar'])->name('tipoAsiento.actualizar');
Route::get('/editarasiento/{id}',[TipoAsientoController::class,'editar'])->name('tipoAsiento.editar');
Route::put('/editarnvoasiento/{id}',[TipoAsientoController::class,'editarnvo'])->name('tipoAsiento.editarnvo');


Route::get('/agregarasiento',[VueloController::class,'crear'])->name('vuelo.home');




