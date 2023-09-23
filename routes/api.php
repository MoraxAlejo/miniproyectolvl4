<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AlumnoCursoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Models\AlumnoCurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AlumnoController::class)->group(function() {
    Route::get('/alumnos', 'index');
    Route::get('/alumnos/{id}', 'show');
    Route::post('/alumnos', 'store');
    Route::put('/alumnos/{id}', 'edit');
    Route::delete('/alumnos/{id}', 'destroy');
 });

 Route::controller(DocenteController::class)->group(function() {
    Route::get('/docentes', 'index');
    Route::get('/docentes/{id}', 'show');
    Route::post('/docentes', 'store');
    Route::put('/docentes/{id}', 'edit');
    Route::delete('/docentes/{id}', 'destroy');
 });

 Route::controller(CursoController::class)->group(function() {
    Route::get('/cursos', 'index');
    Route::get('/cursos/{id}', 'show');
    Route::post('/cursos', 'store');
    Route::put('/cursos/{id}', 'edit');
    Route::delete('/cursos/{id}', 'destroy');
 });

 Route::controller(AlumnoCursoController::class)->group(function() {
   Route::get('/matriculas', 'index');
   Route::get('/matriculas/{id}', 'show');
   Route::post('/matriculas', 'store');
   Route::put('/matriculas/{id}', 'edit');
   Route::delete('/matriculas/{id}', 'destroy');
});