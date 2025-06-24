<?php

use App\Http\Controllers\AuthController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{slug}-{id}', [ProductController::class, 'show'])->where(['slug' => '.*','id' => '[0-9]+'])->name('products.show');
Route::get('/products/{slug}-{id}/edit', [ProductController::class, 'edit'])->where(['slug' => '.*','id' => '[0-9]+'])->name('products.edit');
Route::put('/products/{slug}-{id}', [ProductController::class, 'update'])->where(['slug' => '.*','id' => '[0-9]+'])->name('products.update');
Route::delete('/products/{slug}-{id}', [ProductController::class, 'destroy'])->where(['slug' => '.*','id' => '[0-9]+'])->name('products.destroy');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'doLogin']);
Route::get('/dashboard', fn() => 'Bienvenue sur le dashboard' . \Auth::user()->name)->name('dashboard.login');