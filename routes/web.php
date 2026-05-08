<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CharactersController;

Route::get('/', [PageController::class, 'homepage'])->name('home');
Route::get('/register', [PageController::class, 'registerPage'])->name('register');
Route::get('/statistics', [PageController::class, 'statisticsPage'])->name('statistics');
Route::get('/profile', [PageController::class, 'profilePage'])->name('profile');

Route::post('/register', [PageController::class, 'register'])->name('register.store');
Route::prefix('admin')->group(function () {
    Route::resource('characters', CharactersController::class);
});

