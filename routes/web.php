<?php

use App\Http\Controllers\Admin\AdminAccessController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;

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

    //category Route
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/fetch-category', [CategoryController::class, 'fetch'])->name('admin.category.fetch');
    Route::post('/category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::post('/category/delete', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

    //subcategory Route
    Route::get('/subcategory', [CategoryController::class, 'index'])->name('admin.subcategory.index');
    Route::get('/fetch-subcategory', [CategoryController::class, 'fetch'])->name('admin.subcategory.fetch');
    Route::post('/subcategory', [CategoryController::class, 'store'])->name('admin.subcategory.store');
    Route::post('/subcategory/delete', [CategoryController::class, 'destroy'])->name('admin.subcategory.destroy');

    //user Route
    Route::get('/user', [AdminAccessController::class, 'index'])->name('admin.user.index');
    Route::get('/user-fetch/{id?}', [AdminAccessController::class, 'fetch'])->name('admin.user.fetch');
    Route::post('/user', [AdminAccessController::class, 'store'])->name('admin.user.store');
    Route::post('/user/delete', [AdminAccessController::class, 'destroy'])->name('admin.user.destroy');
    Route::get('/user/permission/{id}', [AdminAccessController::class, 'permissionEdit'])->name('admin.user.permission');
    Route::post('/user/store-permission', [AdminAccessController::class, 'permissionStore'])->name('admin.store.permission');
});
