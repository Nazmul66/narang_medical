<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/', 'frontend.static_pages.home')->name('home');
// Route::view('/product-details', 'frontend.static_pages.products_details')->name('product.details');

Route::get('/product-details/{slug}', function ($slug) {
    $singleProduct = App\Models\ProductCategory::where('slug', $slug)->first();
    return view('frontend.static_pages.products_details', compact('singleProduct'));
})->name('product.details');

Route::view('/sub-product-details', 'frontend.static_pages.sub_product_details')->name('sub-product.details');
Route::view('/address', 'frontend.static_pages.address')->name('address');
Route::view('/abouts', 'frontend.static_pages.abouts')->name('abouts');
Route::view('/price', 'frontend.static_pages.pricing')->name('price');
Route::view('/quality', 'frontend.static_pages.quality')->name('quality');
Route::view('/feedback', 'frontend.static_pages.feedback')->name('feedback');
Route::view('/distributor', 'frontend.static_pages.distributor')->name('distributor');
Route::view('/purchase-enquiry', 'frontend.static_pages.purchase_enquiry')->name('purchase.enquiry');
Route::view('/products', 'frontend.static_pages.products')->name('products');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
