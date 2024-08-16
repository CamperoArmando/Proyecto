<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;



Route::group(['middleware' => ['auth', 'role:Administrador,Supervisor,Vendedor']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Otras rutas protegidas...
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('comments', CommentController::class);
Route::resource('roles', RoleController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('users.index');