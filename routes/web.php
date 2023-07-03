<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Route untuk menampilkan form tambah produk
Route::get('/dashboard/create', [ProductController::class, 'create'])->name('dashboard.create');
// Route untuk menyimpan produk baru
Route::post('/dashboard/store', [ProductController::class, 'store'])->name('products.store');
// Route untuk menampilkan form edit produk
Route::get('/dashboard/edit/{id}', [ProductController::class, 'edit'])->name('dashboard.edit');
// Route untuk memperbarui produk
Route::put('/dashboard/update/{id}', [ProductController::class, 'update'])->name('dashboard.update');
// Route untuk menghapus produk
Route::delete('/dashboard/delete/{id}', [ProductController::class, 'destroy'])->name('dashboard.delete');
Route::get('/', [FrontController::class, 'index'])->name('front.home');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/category', [FrontController::class, 'category'])->name('front.category');
Route::get('/singleproduct', [FrontController::class, 'singleproduct'])->name('front.single-product');
Route::get('/checkout', [FrontController::class, 'checkout'])->name('front.checkout');
Route::get('/cart', [FrontController::class, 'cart'])->name('front.cart');
Route::get('/confirmation', [FrontController::class, 'confirmation'])->name('front.confirmation');
Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/singleblog', [FrontController::class, 'singleblog'])->name('front.single-blog');
Route::get('/tracking', [FrontController::class, 'tracking'])->name('front.tracking');
Route::get('/elements', [FrontController::class, 'elements'])->name('front.elements');
Route::get('/login', [LoginController::class, 'login'])->name('front.login');
Route::get('/register', [LoginController::class, 'register'])->name('front.register');

