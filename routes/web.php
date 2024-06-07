<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// TASK: Add a route below to / URL

Route::post('posts', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::put('posts/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');

Route::get('teams', [\App\Http\Controllers\TeamController::class, 'index'])->name('teams.index');
Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('users/check_update/{name}/{email}', [\App\Http\Controllers\UserController::class, 'check_update'])->name('user');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
