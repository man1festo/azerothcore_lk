<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage'])->name('home');
Route::get('/register', [PageController::class, 'registerPage'])->name('register');
Route::get('/statistics', [PageController::class, 'statisticsPage'])->name('statistics');
Route::get('/profile', [PageController::class, 'profilePage'])->name('profile');

Route::post('/register', [PageController::class, 'register'])->name('register.store');
