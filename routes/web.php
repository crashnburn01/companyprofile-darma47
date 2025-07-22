<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Web Routes
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

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        // Cocok dengan URL: /admin
        return view('admin.index');
    })->name('dashboard');

    Route::get('/add-content', function () {
        // Cocok dengan URL: /admin
        return view('admin.content.create');
    })->name('content.create');


    Route::get('/tes', function () {
        // Cocok dengan URL: /admin
        return view('admin.user.tes');
    })->name('tes');

    Route::get('/add-user', function () {
        // Cocok dengan URL: /admin
        return view('admin.user.create');
    })->name('user.create');

    Route::get('/content', function () {
        // Cocok dengan URL: /admin
        return view('admin.content.index');
    })->name('content.index');
});