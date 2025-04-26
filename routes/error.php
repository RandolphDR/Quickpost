<?php

use Illuminate\Support\Facades\Route;
;

Route::view('/401', 'errors.401')->name('error.401');
Route::view('/402', 'errors.402')->name('error.402');
Route::view('/403', 'errors.403')->name('error.403');
Route::view('/404', 'errors.404')->name('error.404');
Route::view('/419', 'errors.419')->name('error.419');
Route::view('/429', 'errors.429')->name('error.429');
Route::view('/500', 'errors.500')->name('error.500');
Route::view('/503', 'errors.503')->name('error.503');


