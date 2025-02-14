<?php

use Illuminate\Support\Facades\Route;


Route::get('/',\App\Http\Controllers\HomeController::class)->name('home');
Route::get('/store',\App\Http\Controllers\StoreController::class)->name('store');
Route::get('/product/{id}',\App\Http\Controllers\ProductView::class)->name('product');

//
//$routes = function() {
//  route::get('/',\App\Http\Controllers\HomeController::class)->name('home');
//  route::get('/store',\App\Http\Controllers\StoreController::class)->name('store');
//
//};
//
//// routes '/en'
//route::middleware('language')->group($routes);
//
//route::middleware('language')
//    ->prefix('{locale?}')->wherein('locale', array_keys(config('app.available_locales')))
//    ->group($routes);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/auth.php';
