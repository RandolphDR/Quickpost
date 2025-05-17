<?php

use Illuminate\Support\Facades\Route;

Route::get('explore/blog/{slug}', function ($slug) {
    return view('pages.blog.view-posts', ['slug' => $slug]);
})->name('blog.view');

Route::middleware('can:user-access')->prefix('explore')->group(function () {
    Route::view('explore', 'pages.explore')->name('explore');
});

Route::middleware('auth')->prefix('blog')->group(function () {
    Route::view('manage', 'pages.blog.manage-posts')->name('blog.manage');
    Route::view('manage/edit/{slug}', 'pages.blog.edit-posts')->name('blog.edit');
});
