<?php

use Illuminate\Support\Facades\Route;

Route::view('profile/{username}', 'pages.user.profile')->name('user.profile');

Route::middleware('can:user-access')->group(function () {
    Route::view('settings', 'pages.user.settings')->name('user.settings');
});
