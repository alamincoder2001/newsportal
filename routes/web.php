<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// frontend section route
Route::get('/', [HomeController::class, 'index'])->name('website');
Route::get('/cat/{slug?}', [HomeController::class, 'categoryWise'])->name('categorywise');
Route::get('/all/{slug?}', [HomeController::class, 'categoryWiseAll'])->name('categorywiseall');
Route::get('/cat/{cat_slug?}/{slug?}', [HomeController::class, 'singleNews'])->name('singlenews');
