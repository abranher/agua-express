<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockProductController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:ADMIN'])->group(function () {

  Route::get('/admin', function () {
    return view('admin.dashboard');
  })->name('admin.dashboard');


  Route::resource('products', ProductController::class);

  Route::resource('stock-products', StockProductController::class);
});
