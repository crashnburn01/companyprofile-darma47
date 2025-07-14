<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/hubungi-kami', function () {
    return view('contact');
})->name('kontak');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Route::get('/dashboard', function () {
//     return view('layout.admin');
// })->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        // Cocok dengan URL: /admin
        return view('admin.index');
    })->name('dashboard');
});