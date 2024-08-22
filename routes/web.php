<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/index', 'frontend.static_pages.home')->name('home');
Route::view('/about', 'frontend.static_pages.about')->name('about');
Route::view('/price', 'frontend.static_pages.pricing')->name('price');
Route::view('/quality', 'frontend.static_pages.quality')->name('quality');
Route::view('/feedback', 'frontend.static_pages.feedback')->name('feedback');
