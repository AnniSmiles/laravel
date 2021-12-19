<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminGroupController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Models\Group;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function (){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

});

Route::middleware('auth')->group(function (){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/groups/{group}', [GroupController::class, 'show'])->name('show.group');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware('admin')->group(function (){
    Route::get('admin', [AdminController::class, 'index']);
    Route::resource('admin/product', AdminProductController::class)->except('index');
    Route::resource('admin/group', AdminGroupController::class)->except('index');
});
