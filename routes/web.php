<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaundryController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// navbar page 
Route::get('/', [LaundryController::class, 'landingPage'])->name('landingPage');
Route::get('/katalog', [LaundryController::class, 'katalogPage'])->name('katalogPage');
Route::get('/kontak-pemesanan', [LaundryController::class, 'kontak_pemesananPage'])->name('kontak_pemesananPage');
Route::get('/daftar-member', [LaundryController::class, 'daftarmemberPage'])->name('daftar_memberPage');
Route::get('/konfirmasi-pesanan', [LaundryController::class, 'konfirmasipesananPage'])->name('konfirmasi_pesananPage');

// authentikasi
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/create', [AuthController::class, 'registerCreate'])->name('register.create');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// dashboard Admin
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/index', [AdminController::class, 'index'])->name('index');
    Route::get('/daftar-pesanan', [AdminController::class, 'daftarPesanan'])->name('daftarPesanan');
    Route::get('/pesanan-baru', [AdminController::class, 'pesananBaru'])->name('pesananBaru');
    Route::get('/recap', [AdminController::class, 'recap'])->name('recap');
});