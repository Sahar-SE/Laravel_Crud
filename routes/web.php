<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Controllers\ProductController;

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
// this code interact with product controller and in here ProductController is
// the name of the class, index is the action or method which will implement
// and we give the route a name which is product.index and this option is normal.
Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
