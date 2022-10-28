<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function () {
    return redirect('/admin/user');
});

Route::prefix('admin')->group(function () {
    Route::resource('user', UserController::class);
    Route::get('user/mail/form', [UserController::class, 'formSend'])->name('form');
    Route::post('user/mail/form', [UserController::class, 'sendMail'])->name('send');
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
});