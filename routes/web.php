<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index']);

Route::get('admin', [LoginController::class, 'showLogin']);
Route::post('login', [LoginController::class, 'login']);

# Post
Route::get('post/{slug}', [\App\Http\Controllers\Front\HomeController::class, 'singlePost']);

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('users', [\App\Http\Controllers\UsersController::class, 'index'])->name('admin.users');

    # Posts
    Route::get('posts', [\App\Http\Controllers\PostsController::class, 'index'])->name('admin.posts.index');
    Route::get('posts/create', [\App\Http\Controllers\PostsController::class, 'create'])->name('admin.posts.create');
    Route::post('posts/store', [\App\Http\Controllers\PostsController::class, 'store'])->name('admin.posts.store');

    # Logout
    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
});


