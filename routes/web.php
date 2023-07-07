<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');
Route::get('/dashboard/create', [ProductController::class, 'create'])->name('dashboard.create');
Route::get('/settings', [DashboardController::class, 'settings'])->name('back.settings')->middleware('auth');
Route::post('/dashboard/store', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('/dashboard/edit/{id}', [ProductController::class, 'edit'])->name('dashboard.edit')->middleware('auth');
Route::put('/dashboard/update/{id}', [ProductController::class, 'update'])->name('dashboard.update')->middleware('auth');
Route::delete('/dashboard/delete/{id}', [ProductController::class, 'destroy'])->name('dashboard.delete')->middleware('auth');
Route::get('/', [FrontController::class, 'index'])->name('front.home');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/category', [FrontController::class, 'category'])->name('front.category');
Route::get('/singleproduct/{id}', [FrontController::class, 'singleproduct'])->name('front.single-product');
Route::get('/checkout', [FrontController::class, 'checkout'])->name('front.checkout');
Route::get('/cart', [FrontController::class, 'cart'])->name('front.cart');
Route::get('/confirmation', [FrontController::class, 'confirmation'])->name('front.confirmation');
Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/singleblog', [FrontController::class, 'singleblog'])->name('front.single-blog');
Route::get('/tracking', [FrontController::class, 'tracking'])->name('front.tracking');
Route::get('/elements', [FrontController::class, 'elements'])->name('front.elements');

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/admin/categories/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('/admin/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('category.delete');

Route::get('/login', [LoginController::class, 'login'])->name('front.login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('front.loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('front.register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('front.registeruser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
