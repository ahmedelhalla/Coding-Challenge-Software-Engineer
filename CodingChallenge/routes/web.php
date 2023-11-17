<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/products/create', [ProductController::class, 'createForm'])->name('products.create');
Route::post('/products', [ProductController::class, 'create'])->name('products.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');



Route::get('/', function () {
    return view('products.create');
}); 
