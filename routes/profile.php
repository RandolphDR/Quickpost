<?php

use Illuminate\Support\Facades\Route;

Route::view('profile/{username}', 'pages.user.profile')->name('user.profile');
