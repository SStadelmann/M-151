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
*/
Route::get('/', [\App\Http\Controllers\ProductController::class, 'list']);
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'list'])->name('list');
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail']);
Route::match(['get', 'post'], '/login', [\App\Http\Controllers\CustomerController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/register', [\App\Http\Controllers\CustomerController::class, 'register'])->name('register');
Route::get('/user/{id}/orders', [\App\Http\Controllers\CustomerController::class, 'orders'])->name('UserOrders');
Route::get('/addProduct/{id}', [\App\Http\Controllers\WarenkorbController::class, 'addProduct']);
Route::get('/cart', [\App\Http\Controllers\WarenkorbController::class, 'basket']);
Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'checkout']);
Route::get('/sendorder', [\App\Http\Controllers\CheckoutController::class, 'sendOrder']);

