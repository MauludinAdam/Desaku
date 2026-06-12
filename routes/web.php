<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KepalaRumahController;
use Illuminate\Support\Facades\Route;





// Route Auth Controller
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/cekLogin', [AuthController::class, 'cekLogin'])->name('cekLogin');
Route::get('auth/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/layout/template', [AuthController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // Route Kepala Rumah
    Route::middleware('admin')->group(function () {
        Route::get('/admin/kepalaRumah/kepalarumah', [KepalaRumahController::class, 'index'])->name('kepalaRumah/kepalarumah');
        Route::get('/admin/kepalaRumah/addData', [KepalaRumahController::class, 'addData'])->name('kepalaRumah/addData');
        Route::post('/admin/kepalaRumah/store', [KepalaRumahController::class, 'store'])->name('kepalaRumah/store');
        Route::get('admin/kepalaRumah/show/{id}', [KepalaRumahController::class, 'show'])->name('kepalaRumah/show')->middleware('admin');
        Route::get('admin/kepalaRumah/editData/{id}', [KepalaRumahController::class, 'editData'])->name('kepalaRumah/editData');
        Route::put('admin/kepalaRumah/update/{id}', [KepalaRumahController::class, 'update'])->name('kepalaRumah/update')->middleware('admin');
        Route::get('admin/kepalaRumah/destroy/{id}', [KepalaRumahController::class, 'destroy'])->name('kepalaRumah/destroy');

        // Route Bantuan Sosial
        Route::get('admin/bantuansosial/bansos', [BansosController::class, 'index'])->name('bansos');
    });
});