<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if(Auth::check())
        return redirect(route('products'));
    return view('welcome');
})->name('/');

Auth::routes();
#Products
Route::get('products',[\App\Http\Controllers\ProductController::class,'index'])->name('products')->middleware('auth');
Route::post('products_store',[\App\Http\Controllers\ProductController::class,'store'])->name('products_store')->middleware('auth');
