<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminAccessController;
use App\Http\Controllers\Admin\SubcategoryController;

// frontend section route
Route::get('/', [HomeController::class, 'index'])->name('website');
Route::get('/category/{slug?}', [HomeController::class, 'categoryWise'])->name('categorywise');
Route::get('/single-news/{slug?}', [HomeController::class, 'singleNews'])->name('singlenews');


// Admin Login Route
Route::group(["prefix" => "admin"], function () {
    Route::get('/', [LoginController::class, 'showAdminLoginForm']);
    Route::post('/', [LoginController::class, 'AdminLogin'])->name('admin.login');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    // admin dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //settings Route
    Route::get('/settings', [AdminController::class, 'setting'])->name('admin.settings');
    Route::get('/settings-fetch', [AdminController::class, 'fetchSetting'])->name('admin.settings.fetch');
    Route::post('/settings', [AdminController::class, 'storeSetting'])->name('admin.settings.store');

    //profile Route
    Route::get('/profile', [AdminController::class, 'profileIndex'])->name('admin.profile');
    Route::post('/profile', [AdminController::class, 'profileUpdate'])->name('admin.profile.update');
    Route::post('/profileImage', [AdminController::class, 'imageUpdate'])->name('admin.profile.imageUpdate');

    //category Route
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/fetch-category', [CategoryController::class, 'fetch'])->name('admin.category.fetch');
    Route::post('/category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::post('/category/delete', [CategoryController::class, 'destroy'])->name('admin.category.destroy');


    //Banner Route
    Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner.index');
    Route::get('/fetch-banner', [BannerController::class, 'fetch'])->name('admin.banner.fetch');
    Route::post('/banner', [BannerController::class, 'store'])->name('admin.banner.store');
    Route::post('/banner/delete', [BannerController::class, 'destroy'])->name('admin.banner.destroy');

    //Ad Route
    Route::get('/ad', [AdController::class, 'index'])->name('admin.ad.index');
    Route::get('/fetch-ad', [AdController::class, 'fetch'])->name('admin.ad.fetch');
    Route::post('/ad', [AdController::class, 'store'])->name('admin.ad.store');
    Route::post('/ad/delete', [AdController::class, 'destroy'])->name('admin.ad.destroy');

    //subcategory Route
    Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('admin.subcategory.index');
    Route::get('/fetch-subcategory', [SubcategoryController::class, 'fetch'])->name('admin.subcategory.fetch');
    Route::post('/subcategory', [SubcategoryController::class, 'store'])->name('admin.subcategory.store');
    Route::post('/subcategory/delete', [SubcategoryController::class, 'destroy'])->name('admin.subcategory.destroy');

    //news Route
    Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/fetch-news', [NewsController::class, 'fetch'])->name('admin.news.fetch');
    Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
    Route::post('/news/delete', [NewsController::class, 'destroy'])->name('admin.news.destroy');

    //user Route
    Route::get('/user', [AdminAccessController::class, 'index'])->name('admin.user.index');
    Route::get('/user-fetch/{id?}', [AdminAccessController::class, 'fetch'])->name('admin.user.fetch');
    Route::post('/user', [AdminAccessController::class, 'store'])->name('admin.user.store');
    Route::post('/user/delete', [AdminAccessController::class, 'destroy'])->name('admin.user.destroy');
    Route::get('/user/permission/{id}', [AdminAccessController::class, 'permissionEdit'])->name('admin.user.permission');
    Route::post('/user/store-permission', [AdminAccessController::class, 'permissionStore'])->name('admin.store.permission');
});