<?php

use App\Http\Controllers\Admin\AdminAccessController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdvertiseController;
use App\Http\Controllers\Admin\AdvertiseFiveController;
use App\Http\Controllers\Admin\AdvertiseFourController;
use App\Http\Controllers\Admin\AdvertiseThreeController;
use App\Http\Controllers\Admin\AdvertiseTwoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\EmployeeController;

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

    //subcategory Route
    Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('admin.subcategory.index');
    Route::get('/fetch-subcategory', [SubcategoryController::class, 'fetch'])->name('admin.subcategory.fetch');
    Route::post('/subcategory', [SubcategoryController::class, 'store'])->name('admin.subcategory.store');
    Route::post('/subcategory/delete', [SubcategoryController::class, 'destroy'])->name('admin.subcategory.destroy');

    // designation Route
    Route::get('/designation', [DesignationController::class, 'create'])->name('admin.designation.create');
    Route::get('/get-designation', [DesignationController::class, 'index'])->name('admin.designation.index');
    Route::post('/designation', [DesignationController::class, 'store'])->name('admin.designation.store');
    Route::post('/designation/delete', [DesignationController::class, 'destroy'])->name('admin.designation.destroy');

    // department Route
    Route::get('/department', [DepartmentController::class, 'create'])->name('admin.department.create');
    Route::get('/get-department', [DepartmentController::class, 'index'])->name('admin.department.index');
    Route::post('/department', [DepartmentController::class, 'store'])->name('admin.department.store');
    Route::post('/department/delete', [DepartmentController::class, 'destroy'])->name('admin.department.destroy');

    //news Route
    Route::get('/manage-news', [NewsController::class, 'index'])->name('admin.news.manage');
    Route::get('/get-news/{id?}', [NewsController::class, 'getNews'])->name('admin.news.get');
    Route::get('/news/{id?}', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
    Route::post('/update/news', [NewsController::class, 'update'])->name('admin.news.update');
    Route::post('/news/delete', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    Route::get('/pending-news', [NewsController::class, 'newsPending'])->name('admin.news.pending');
    Route::get('/get-pending-news', [NewsController::class, 'getPendingNews'])->name('admin.get.pending.news');
    Route::post('/news/approve', [NewsController::class, 'approve'])->name('admin.news.approve');
    Route::post('/news/archive', [NewsController::class, 'archive'])->name('admin.news.archive');
    // Route::get('/archive-all-news', [NewsController::class, 'archiveAllNews'])->name('admin.archiveall.news');
    Route::get('/news-archive', [NewsController::class, 'newsArchive'])->name('admin.news.archive');
    Route::get('/get-archive-news', [NewsController::class, 'getArchiveNews'])->name('admin.get.archive.news');
    Route::post('/news/undo', [NewsController::class, 'newsUndo'])->name('admin.news.undo');

    //Employee Route
    Route::get('/employee-list', [EmployeeController::class, 'index'])->name('admin.employee.list');
    Route::get('/get-employee', [EmployeeController::class, 'getEmployee'])->name('admin.employee.get');
    Route::get('/employee-entry', [EmployeeController::class, 'create'])->name('admin.employee.entry');
    Route::post('/save-employee', [EmployeeController::class, 'store'])->name('admin.employee.store');
    Route::post('/update/employee', [EmployeeController::class, 'update'])->name('admin.employee.update');
    Route::post('/employee/delete', [EmployeeController::class, 'destroy'])->name('admin.employee.destroy');

    //user Route
    Route::get('/user', [AdminAccessController::class, 'create'])->name('admin.user.create');
    Route::get('/get-user/{id?}', [AdminAccessController::class, 'index'])->name('admin.user.index');
    Route::post('/user', [AdminAccessController::class, 'store'])->name('admin.user.store');
    Route::post('/update/user', [AdminAccessController::class, 'update'])->name('admin.user.update');
    Route::post('/user/delete', [AdminAccessController::class, 'destroy'])->name('admin.user.destroy');
    Route::get('/user/permission/{id}', [AdminAccessController::class, 'permissionEdit'])->name('admin.user.permission');
    Route::post('/user/store-permission', [AdminAccessController::class, 'permissionStore'])->name('admin.store.permission');

    // advertise one Route
    Route::get('/advertise-one', [AdvertiseController::class, 'create'])->name('admin.advertise_one.create');
    Route::get('/get-advertise-one', [AdvertiseController::class, 'index'])->name('admin.advertise_one.index');
    Route::post('/advertise-one', [AdvertiseController::class, 'store'])->name('admin.advertise_one.store');

    // advertise two Route
    Route::get('/advertise-two', [AdvertiseTwoController::class, 'create'])->name('admin.advertise_two.create');
    Route::get('/get-advertise-two', [AdvertiseTwoController::class, 'index'])->name('admin.advertise_two.index');
    Route::post('/advertise-two', [AdvertiseTwoController::class, 'store'])->name('admin.advertise_two.store');

    // advertise three Route
    Route::get('/advertise-three', [AdvertiseThreeController::class, 'create'])->name('admin.advertise_three.create');
    Route::get('/get-advertise-three', [AdvertiseThreeController::class, 'index'])->name('admin.advertise_three.index');
    Route::post('/advertise-three', [AdvertiseThreeController::class, 'store'])->name('admin.advertise_three.store');

    // advertise four Route
    Route::get('/advertise-four', [AdvertiseFourController::class, 'create'])->name('admin.advertise_four.create');
    Route::get('/get-advertise-four', [AdvertiseFourController::class, 'index'])->name('admin.advertise_four.index');
    Route::post('/advertise-four', [AdvertiseFourController::class, 'store'])->name('admin.advertise_four.store');

    // advertise five Route
    Route::get('/advertise-five', [AdvertiseFiveController::class, 'create'])->name('admin.advertise_five.create');
    Route::get('/get-advertise-five', [AdvertiseFiveController::class, 'index'])->name('admin.advertise_five.index');
    Route::post('/advertise-five', [AdvertiseFiveController::class, 'store'])->name('admin.advertise_five.store');
});
