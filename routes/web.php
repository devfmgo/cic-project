<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/{slug}', [App\Http\Controllers\HomeController::class, 'singleProduct'])->name('single-product');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');

Route::get('/optimize', function () {
    Artisan::call('optimize:clear');

    return response()->json([
        'status' => 'success',
        'message' => 'Filament Optimize successfully 🚀',
    ]);
})->middleware('auth');

Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('product.search');
Route::get('/product-not-found', function () {
    return view('pages.notfound');
})->name('pages.notfound');

Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('create.feedback');
