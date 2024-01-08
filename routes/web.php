<?php

use App\Http\Controllers\Empleado_controller;
use App\Http\Controllers\Tarea_controller;
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

Route::get('/', [Tarea_controller::class, 'index']);
Route::post('/guardarTareas', [Tarea_controller::class, 'save']);

Route::get('/empleado', [Empleado_controller::class, 'index']);
Route::post('/guardarEmpleado', [Empleado_controller::class, 'save']);
Route::get('/mostrar', [Empleado_controller::class, 'filtrar']);
Route::get('/filtrar', [Empleado_controller::class, 'filtrar']);
