<?php

use App\Http\Controllers\AlumnoApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource("alumnos" , AlumnoApiController::class); //esto es crear los entrypoints