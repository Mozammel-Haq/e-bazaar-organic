<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PublicPageController::class,'index'])->name('home');
Route::get('/products', [PublicPageController::class,'products'])->name('products');
Route::get('/products/{id}', [PublicPageController::class,'product'])->name('product');
Route::get('/blogs', [PublicPageController::class,'blogs'])->name('blogs');
Route::get('/blogs/{id}', [PublicPageController::class,'blog'])->name('blog');
Route::get('/contact', [PublicPageController::class,'contact'])->name('contact');


Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
