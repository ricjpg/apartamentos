<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calcularController;
use App\Http\Controllers\DuenioController;
use App\Http\Controllers\ApartamentoController;

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
    return view('index');
});

Route::get('/calcular', [calcularController::class, 'index'])->name('calcular.index');
Route::get('/calcular/total/', [calcularController::class, 'calcular'])->name('calcular.total');

Route::get('/duenios', [DuenioController::class, 'index'])->name('duenios.index');
Route::get('/duenio/crear', [DuenioController::class, 'crear'])->name('duenio.crear');
Route::post('/duenio/guardar', [DuenioController::class, 'guardar'])->name('duenio.guardar');


Route::get('/apartamentos', [ApartamentoController::class, 'index'])->name('apartamentos.index');

Route::get('/consulta/duenio', [DuenioController::class, 'consulta'])->name('duenio.consulta');
Route::get('/consulta/duenio/respuesta', [DuenioController::class, 'respuesta'])->name('duenio.respuesta');

Route::get('/consulta/apartamento',[ApartamentoController::class, 'consulta'])->name('apartamento.consulta');
Route::get('/consulta/apartamento/respuesta',[ApartamentoController::class, 'respuesta'])->name('apartamento.respuesta');