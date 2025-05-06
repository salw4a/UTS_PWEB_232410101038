<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/authenticate', [PageController::class, 'authenticate'])->name('authenticate');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan/create', [PageController::class, 'create'])->name(('pengelolaan.create'));
Route::post('/pengelolaan/store', [PageController::class, 'store'])->name(('pengelolaan.store'));
