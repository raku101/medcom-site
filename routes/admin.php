<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PageController;

Route::middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('services', ServiceController::class);
    Route::resource('products', ProductController::class);
    Route::resource('pages', PageController::class)->only(['index', 'edit', 'update']);
    Route::get('services/edit-view/{slug}', [ServiceController::class, 'editViewFile'])->name('services.editView');
    Route::put('services/update-view/{slug}', [ServiceController::class, 'updateViewFile'])->name('services.updateView');
});

