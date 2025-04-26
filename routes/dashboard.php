<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\View\Dashboard;

Route::middleware('auth')->group(function () {

    Route::group(['middleware' => 'can:administrator-access', 'prefix' => 'admin'], function () {
        Route::get('/dashboard', [Dashboard::class])->name('admin.dashboard');
    });

});
