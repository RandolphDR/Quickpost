<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Pages\View\Home;
use App\Livewire\Pages\View\Blog;

Route::get('/', Home::class)->name('homepage');
Route::view('about', 'pages.about')->name('about');
Route::view('contact', 'pages.contact')->name('contact');

Route::middleware('auth')->group(function () {
    Route::view('home', 'blog')->name('blog');
    Route::view('profile', 'profile')->name('profile');
});

/* Import Routes Here */
require __DIR__ . '/auth.php';
require __DIR__ . '/dashboard.php';
