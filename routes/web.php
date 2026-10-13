<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CategoryController;

// ===== Bab 2-3: Home, Profil, Reports (dipakai navbar) =====

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/profil', [HomeController::class, 'profil'])
    ->name('profil');

Route::get('/reports', [ReportController::class, 'index'])
    ->name('reports.index');

Route::get('/reports/{id}', [ReportController::class, 'show'])
    ->name('reports.show');

// ===== Bab 5: CRUD Kategori (Create & Read) =====

Route::get('/categories',
    [CategoryController::class, 'index']
)->name('categories.index');

Route::get('/categories/create',
    [CategoryController::class, 'create']
)->name('categories.create');

Route::post('/categories',
    [CategoryController::class, 'store']
)->name('categories.store');