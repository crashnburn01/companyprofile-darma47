<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/hubungi-kami', function () {
    return view('contact');
})->name('kontak');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');