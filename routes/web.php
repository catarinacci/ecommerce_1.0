<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Gloudemans\Shoppingcart\Facades\Cart;


Route::get('/', WelcomeController::class);
Route::get('search', SearchController::class)->name('search');
Route::get('categories/{category}',[CategoryController::class, 'show'])->name('categories.show');
Route::get('products/{product}',[ProductController::class, 'show'])->name('products.show');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('prueba', function () {
    Cart::destroy();
});
