<?php

use App\Http\Controllers\vistasController;
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
//Ruta provicional



Route::get('/index',[vistasController::class,'index'])->name('index');
Route::get('/fundamentos',[vistasController::class,'fundamentos'])->name('fundamentos');
Route::get('/implementacion',[vistasController::class,'implementacion'])->name('implementacion');
Route::get('/generador',[vistasController::class,'generador'])->name('generador');
Route::get('/api', [\App\Http\Controllers\APIController::class, 'index'])->name('api');
Route::get('/tutorial',[vistasController::class,'tutorial'])->name('tutorial');