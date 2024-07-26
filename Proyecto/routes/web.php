<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredienteController;

Route::get('/', function () {
    return view('welcome');
});
// Ruta para mostrar los ingredientes
Route::get('/ingredientes', [IngredienteController::class, 'index'])->name('ingredientes.index');

// Ruta para editar un ingrediente
Route::get('/ingredientes/{id}/edit', [IngredienteController::class, 'edit'])->name('ingredientes.edit');

// Ruta para actualizar un ingrediente
Route::put('/ingredientes/{id}', [IngredienteController::class, 'update'])->name('ingredientes.update');