<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:ADMIN'])->group(function () {

  Route::get('/admin', function () {
    return view('admin.dashboard');
  })->name('admin.dashboard');
});
