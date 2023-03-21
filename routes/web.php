<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('website');
Route::get('/sports', [HomeController::class, 'sports'])->name('sports');
