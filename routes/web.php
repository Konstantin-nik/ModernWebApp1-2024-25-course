<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Public visible routes
Route::get('/', WelcomeController::class)->name('home');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

// Authenticated routes
require __DIR__.'/auth.php';

Route::name('user.')->middleware('auth')->group(function () {
    Route::resource('user/articles', \App\Http\Controllers\User\ArticleController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
