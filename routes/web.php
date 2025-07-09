<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaundryController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [LaundryController::class, 'landingPage'])->name('landingPage');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register/create', [AuthController::class, 'registerCreate'])->name('register.create');


Route::prefix('admin')->group(function(){
    Route::get('/data');
});