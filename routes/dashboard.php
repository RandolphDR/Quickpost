<?php

use Illuminate\Support\Facades\Route;

Route::middleware('can:administrator-access')->prefix('admin')->group(function () {
    Route::view('dashboard', 'dashboard')->name('admin.dashboard');

    Route::prefix('categories')->group(function () {
        Route::view('manage', 'pages.dashboard.category.manage-categories')->name('admin.categories.manage');
        Route::view('create', 'pages.dashboard.category.create-category')->name('admin.category.create');
        Route::view('edit/{categoryId}', 'pages.dashboard.category.edit-category')->name('admin.category.edit');
    });

    Route::prefix('blog')->group(function () {
        Route::view('manage', 'pages.dashboard.blog.manage-posts')->name('admin.blog.manage');
        Route::view('create', 'pages.dashboard.blog.create-post')->name('admin.blog.create');
        Route::view('edit/{slug}', 'pages.dashboard.blog.edit-post')->name('admin.blog.edit');
    });

    Route::prefix('users')->group(function () {
        Route::view('manage', 'pages.dashboard.user.manage-users')->name('admin.user.manage');
        Route::view('create', 'pages.dashboard.user.create-user')->name('admin.user.create');
    });

    Route::view('profile/{username}', 'pages.dashboard.user.profile')->name('admin.user.profile');
    Route::view('settings', 'pages.dashboard.user.settings')->name('admin.user.settings');
});
