<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Redirects\Home;

Route::get('/', Home::class);
Route::view('welcome', 'welcome')->name('homepage');
Route::view('about', 'pages.about')->name('about');
Route::view('contact', 'pages.contact')->name('contact');

/* Import Routes Here */
require __DIR__ . '/auth.php';
require __DIR__ . '/profile.php';
require __DIR__ . '/blog.php';
require __DIR__ . '/dashboard.php';
