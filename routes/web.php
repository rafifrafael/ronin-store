<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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

Route::get('/', [ProductController::class, 'index']);
Route::get('/buy/{id}', [ProductController::class, 'buy']);
Route::get('/docs', [ProductController::class, 'docs']);

Route::get('/admin', [OrderController::class, 'admin']);
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);
