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

// ===== Bab 6: CRUD Kategori lengkap (Resource Route) =====
// Menggantikan 3 route manual Bab 5. Menghasilkan 7 route:
// index, create, store, show, edit, update, destroy

Route::resource('categories', CategoryController::class);