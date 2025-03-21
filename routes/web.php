<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Ruta a sandbox para pruebas de backend
Route::get('/modulo-de-carga', [HomeController::class, 'moduloDeCarga'])->name('modulo-de-carga');
Route::get('/sandbox', [HomeController::class, 'sandbox'])->name('sandbox');
Route::get('/analisis/pre-analisis', [AnalisisController::class, 'preAnalisisForm'])->name('preAnalisis');
Route::post('/analisis/pre-analisis', [AnalisisController::class, 'preAnalisisFormAction'])->name('preAnalisisAction');
Route::get('/analisis/carga-datos-analisis', [AnalisisController::class, 'cargaDatosAnalisis'])->name('cargaDatosAnalisis');
Route::post('/analisis/validacion-datos-analisis', [AnalisisController::class, 'validacionDatosAnalisis'])->name('validacionDatosAnalisis');
