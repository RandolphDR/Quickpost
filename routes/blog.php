<?php

use Illuminate\Support\Facades\Route;

Route::get('explore/blog/{slug}', function ($slug) {
    return view('pages.blog.view-posts', ['slug' => $slug]);
})->name('blog.view');
