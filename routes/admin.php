<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockProductController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:ADMIN'])->group(function () {

  Route::get('/admin', function () {
    return view('admin.dashboard');
  })->name('admin.dashboard');

  Route::get('products/report-pdf', [ProductController::class, 'reportPDF'])
    ->name('products.report-pdf');
  Route::get('products/download-pdf', [ProductController::class, 'downloadPDF'])
    ->name('products.download-pdf');
  Route::resource('products', ProductController::class);

  Route::resource('stock-products', StockProductController::class);
});
