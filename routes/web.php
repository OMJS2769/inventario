<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if(Auth::check())
        return redirect(route('products'));
    return view('welcome');
})->name('/');
Auth::routes();
Route::view('products','product.index')->name('products')->middleware('auth');
