<?php

use App\Http\Controllers\Admin\AdminAccessController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;

// frontend section route
Route::get('/', [HomeController::class, 'index'])->name('website');
Route::get('/sports', [HomeController::class, 'sports'])->name('sports');




// Admin Login Route
Route::group(["prefix" => "admin"], function () {
    Route::get('/', [LoginController::class, 'showAdminLoginForm']);
    Route::post('/', [LoginController::class, 'AdminLogin'])->name('admin.login');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    // admin dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //profile Route
    Route::get('/profile', [AdminController::class, 'profileIndex'])->name('admin.profile');
    Route::post('/profile', [AdminController::class, 'profileUpdate'])->name('admin.profile.update');
    Route::post('/profileImage', [AdminController::class, 'imageUpdate'])->name('admin.profile.imageUpdate');

    //user Route
    Route::get('/user', [AdminAccessController::class, 'index'])->name('admin.user.index');
    Route::get('/user-fetch/{id?}', [AdminAccessController::class, 'fetch'])->name('admin.user.fetch');
    Route::post('/user', [AdminAccessController::class, 'store'])->name('admin.user.store');
});
