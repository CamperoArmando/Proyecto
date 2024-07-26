<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientesController;

Route::get('/', function () {
    return view('welcome');
});
// Ruta para mostrar los ingredientes
Route::get('/ingredientes', [IngredientesController::class, 'index'])->name('ingredientes.index');

// Ruta para editar un ingrediente
Route::get('/ingredientes/{id}/edit', [IngredientesController::class, 'edit'])->name('ingredientes.edit');

// Ruta para actualizar un ingrediente
Route::put('/ingredientes/{id}', [IngredientesController::class, 'update'])->name('ingredientes.update');