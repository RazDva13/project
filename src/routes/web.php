<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/categories', [\App\Http\Controllers\MainController::class, 'categories'])->name('categories');

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('/cart/place', [\App\Http\Controllers\CartController::class, 'cartPlace'])->name('cart-place');
Route::post('/cart/add/{id}', [\App\Http\Controllers\CartController::class, 'cartAdd'])->name('cart-add');

Route::get('/{category}', [\App\Http\Controllers\MainController::class, 'category'])->name('category');
Route::get('/{category}/{product?}', [\App\Http\Controllers\MainController::class, 'product'])->name('product');

