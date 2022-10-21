<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/admin/user', [UserController::class, 'index'])->name('index');
Route::get('/admin/user/create', [UserController::class, 'create'])->name('create');
Route::get('/admin/role', [RoleController::class, 'index'])->name('role');
Route::get('/admin/permission', [PermissionController::class, 'index'])->name('permission');
Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
Route::get('/admin/category', [CategoryController::class, 'index'])->name('category');
