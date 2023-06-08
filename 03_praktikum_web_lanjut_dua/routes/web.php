<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
})->name('home');

Auth::routes();


Route::prefix('/category') -> group(function () {
    Route::get('/products', function () {
        return view('products');
    })->name('products');
    Route::get('/program', function() {
        return view('program');
    });
});

Route::get('/news/{news?}', function ($news='') {
    return 'Halaman News Saat Ini ' .$news; 
});

Route::get('/about-us', function(){
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function(){
    return view('contact-us');
})->name('contact-us');

//Route::resource('/contact-us', ContactController::class) -> only('store');