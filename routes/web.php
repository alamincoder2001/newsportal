<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('website');
Route::get('/international-news', [HomeController::class, 'internationalnews'])->name('internationalnews');
Route::get('/national', [HomeController::class, 'national'])->name('national');
Route::get('/country', [HomeController::class, 'country'])->name('country');
Route::get('/entertainment', [HomeController::class, 'entertainment'])->name('entertainment');
Route::get('/sports', [HomeController::class, 'sports'])->name('sports');
