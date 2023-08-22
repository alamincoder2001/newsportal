<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// frontend section route
Route::get('/', [HomeController::class, 'index'])->name('website');
Route::get('/cat/{slug?}', [HomeController::class, 'categoryWise'])->name('categorywise');
Route::get('/all/{slug?}', [HomeController::class, 'categoryWiseAll'])->name('categorywiseall');
Route::get('/cat/{cat_slug?}/{slug?}', [HomeController::class, 'singleNews'])->name('singlenews');
Route::get('/epaper/', [HomeController::class, 'epaper'])->name('epaper');
Route::get('/archive/{date}', [HomeController::class, 'archive'])->name('archive');
Route::post('/old-epaper-list', [HomeController::class, 'oldpaperlist']);
