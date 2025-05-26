<?php

use Illuminate\Support\Facades\Route;


Route::middleware(App\Http\Middleware\GuestUserAccess::class)->prefix('explore')->group(function () {
    Route::get('blog/{slug}', function ($slug) {
        return view('pages.blog.view-posts', ['slug' => $slug]);
    })->name('blog.view');
    Route::view('/', 'pages.explore')->name('explore');
});

Route::middleware('can:user-access')->group(function () {
    Route::prefix('blog')->group(function () {
        Route::view('manage', 'pages.blog.manage-posts')->name('blog.manage');
        Route::view('create', 'pages.blog.create-post')->name('blog.create');
        Route::view('edit/{slug}', 'pages.blog.edit-post')->name('blog.edit');
    });
});
