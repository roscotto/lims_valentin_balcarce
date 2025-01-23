<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Ruta raíz al inicio de sesión
Route::get('/', function () {
    return view('login');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';


// Ruta a sandbox para pruebas de backend
Route::get('/sandbox', [HomeController::class, 'sandbox'])
  ->name('sandbox');

// Ruta a la página principal del sistema - "Módulo de Carga"
Route::get('/modulo-de-carga', [HomeController::class, 'moduloDeCarga'])
  ->name('modulo-de-carga');
