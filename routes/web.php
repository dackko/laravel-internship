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
    Route::get('posts/{id}/edit', [\App\Http\Controllers\PostsController::class, 'edit'])->name('admin.posts.edit');
    Route::post('posts/{id}/update', [\App\Http\Controllers\PostsController::class, 'update'])->name('admin.posts.update');
    Route::get('posts/{id}/destroy', [\App\Http\Controllers\PostsController::class, 'destroy'])->name('admin.posts.destroy');
    # Categories
    Route::get('categories', [\App\Http\Controllers\CategoriesController::class, 'index'])->name('admin.categories.index');
    Route::get('categories/create', [\App\Http\Controllers\CategoriesController::class, 'create'])->name('admin.categories.create');
    Route::post('categories/store', [\App\Http\Controllers\CategoriesController::class, 'store'])->name('admin.categories.store');

    # Logout
    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
});


