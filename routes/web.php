<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Indexes Routes*/
Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/product/{product}', [\App\Http\Controllers\IndexController::class, 'show'])->name('single-product');

/* Users Panel */
Route::prefix('home')->middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.home');
    Route::get('/order/{order}', [\App\Http\Controllers\HomeController::class, 'order'])->name('home.order');
    Route::get('/profile', [\App\Http\Controllers\HomeController::class, 'profileView'])->name('home.profile');
    Route::get('/edit/{user}', [\App\Http\Controllers\HomeController::class, 'profileForm'])->name('home.profile.form');
    Route::patch('/edit/{user}', [\App\Http\Controllers\HomeController::class, 'profileEdit'])->name('home.profile.update');
});

/* Admin Panel */
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::resource('/products', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('/users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('/orders', \App\Http\Controllers\Admin\OrderController::class);
});


