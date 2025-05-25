<?php

use Illuminate\Support\Facades\Route;

Route::middleware(App\Http\Middleware\GuestUserAccess::class)->group(function () {
    Route::view('profile/{username}', 'pages.user.profile')->name('user.profile');
});

Route::middleware('can:user-access')->group(function () {
    Route::view('settings', 'pages.user.settings')->name('user.settings');
});

Route::middleware('can:administrator-access')->group(function () {

});
