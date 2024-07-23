<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// TASK: Add a route below to / URL

Route::get('/', HomeController::class)->name('home');

Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::get('teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('users', [UserController::class, 'index'])->name('users');
Route::get('users/check_update/{name}/{email}', [UserController::class, 'check_update'])->name('user');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
