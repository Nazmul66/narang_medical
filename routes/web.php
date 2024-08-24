<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/index', 'frontend.static_pages.home')->name('home');
Route::view('/products', 'frontend.static_pages.products')->name('products');
Route::view('/product-details', 'frontend.static_pages.products_details')->name('product.details');
Route::view('/sub-product-details', 'frontend.static_pages.sub_product_details')->name('sub-product.details');
Route::view('/address', 'frontend.static_pages.address')->name('address');
Route::view('/about', 'frontend.static_pages.about')->name('about');
Route::view('/price', 'frontend.static_pages.pricing')->name('price');
Route::view('/quality', 'frontend.static_pages.quality')->name('quality');
Route::view('/feedback', 'frontend.static_pages.feedback')->name('feedback');
Route::view('/distributor', 'frontend.static_pages.distributor')->name('distributor');
Route::view('/purchase-enquiry', 'frontend.static_pages.purchase_enquiry')->name('purchase.enquiry');
