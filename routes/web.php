<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;

Route::post('/contact', [ReviewController::class, 'store'])->name('reviews.store');



Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about'); // Route :: Halaman About us
});


Route::get('/services', function () {
    return view('services'); // bikin file resources/views/services.blade.php
});

Route::get('/readmore', function () {
    return view('readmore');
});

Route::get('/contact', function () {
    return view('contact'); // pastikan file resources/views/contact.blade.php ada
});

Route::get('/development', function () {
    return view('development');
});

Route::get('/planning', function () {
    return view('planning');
});
