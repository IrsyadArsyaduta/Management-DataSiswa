<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController; // Controllers : folder Auth yang didalamnya terdapat file AuthController
use App\Http\Controllers\AdminDashboardController; // Controllers : file AdminDashboardController
use App\Http\Controllers\WalisiswaDashboardController; // Controllers : file WalisiswaDashboardController
use App\Http\Controllers\SiswaDashboardController; // Controllers : file SiswaDashboardController

// Route untuk halaman utama
Route::get('/', function () {
    return view('index');
});

// Route untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk menangani pengiriman form login
Route::post('/login', [AuthController::class, 'login']);

// Route yang memerlukan otentikasi
Route::group(['middleware' => 'auth'], function () {
    // Route untuk menampilkan halaman setelah login
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard'); // Route untuk menampilkan halaman : folder admin (views) yang didalamnya terdapat file dashboard.blade
    Route::get('/walisiswa-dashboard', [WalisiswaDashboardController::class, 'index'])->name('walisiswa.dashboard'); // Route untuk menampilkan halaman : folder walisiswa (views) yang didalamnya terdapat file dashboard.blade
    Route::get('/siswa-dashboard', [SiswaDashboardController::class, 'index'])->name('siswa.dashboard'); // Route untuk menampilkan halaman : folder siswa (views) yang didalamnya terdapat file dashboard.blade
});
