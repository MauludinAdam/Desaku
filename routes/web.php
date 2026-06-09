<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/layout/template', [AuthController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');