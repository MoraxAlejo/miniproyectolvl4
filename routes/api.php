<?php

use App\Http\Controllers\AlumnoController;
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