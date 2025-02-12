<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Points to resources/views/home.blade.php
})->name('home');

Route::get('/about', function () {
    return view('about'); // Points to resources/views/about.blade.php
})->name('about');

Route::get('/services', function () {
    return view('services'); // Points to resources/views/services.blade.php
})->name('services');

Route::get('/contact', function () {
    return view('contact'); // Points to resources/views/contact.blade.php
})->name('contact');

Route::get('/product', function () {
    return view('product'); // Points to resources/views/contact.blade.php
})->name('product');

Route::get('/profile', function () {
    return view('profile'); // Points to resources/views/contact.blade.php
})->name('profile');
