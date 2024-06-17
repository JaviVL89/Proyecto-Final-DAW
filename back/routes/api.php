<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\ForoController;
use App\Http\Controllers\LeccionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProgresoController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\UserController;

// Rutas para la autenticación del usuario
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas para Usuarios
    Route::resource('users', UserController::class);

    // Rutas para Cursos
    Route::resource('cursos', CursoController::class);

    // Rutas para Lecciones
    Route::resource('lecciones', LeccionController::class);

    Route::resource('ejercicios', EjercicioController::class);
    Route::resource('foros', ForoController::class);
    Route::resource('posts', PostController::class);
    Route::resource('progresos', ProgresoController::class);
    Route::resource('respuestas', RespuestaController::class);
});

// Aquí puedes tener rutas para vistas públicas que no requieren autenticación
// Por ejemplo:
// Route::get('/welcome', function () {
//     return view('welcome');
// });
