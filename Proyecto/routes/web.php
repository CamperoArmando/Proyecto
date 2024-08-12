<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\PlatoController;

Route::get('/', function () {
    return view('welcome');
});
// Ruta para mostrar los ingredientes
Route::get('/ingredientes', [IngredientesController::class, 'index'])->name('ingredientes.index');

// Ruta para editar un ingrediente
Route::get('/ingredientes/{id}/edit', [IngredientesController::class, 'edit'])->name('ingredientes.edit');

// Ruta para actualizar un ingrediente
Route::put('/ingredientes/{id}', [IngredientesController::class, 'update'])->name('ingredientes.update');

// Ruta para mostrar la lista de ventas
Route::get('/ventas', [VentaController::class, 'index'])->name('ventas.index');

// Ruta para mostrar el formulario de edición de una venta
Route::get('/ventas/{id}/edit', [VentaController::class, 'edit'])->name('ventas.edit');

// Ruta para actualizar una venta
Route::put('/ventas/{id}', [VentaController::class, 'update'])->name('ventas.update');

Route::get('/platos', [PlatoController::class, 'index'])->name('platos.index');

// Ruta para mostrar los detalles del precio
Route::get('/platos/{id}/details', [PlatoController::class, 'showDetails'])->name('platos.showDetails');

// Ruta para actualizar los detalles del precio
Route::put('/platos/{id}/details', [PlatoController::class, 'updateDetails'])->name('platos.updateDetails');