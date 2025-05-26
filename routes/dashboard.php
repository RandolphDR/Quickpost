<?php

use Illuminate\Support\Facades\Route;

Route::middleware('can:administrator-access')->prefix('admin')->group(function () {
    Route::view('dashboard', 'dashboard')->name('admin.dashboard');

    Route::prefix('blog')->group(function () {
        Route::view('manage', 'pages.dashboard.blog.manage-posts')->name('admin.blog.manage');
        Route::view('create', 'pages.dashboard.blog.create-post')->name('admin.blog.create');
    });
});
