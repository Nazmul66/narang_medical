<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\productCategory;
use App\Models\ProductSubCategory;
use App\Models\ProductChildCategory;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/', 'frontend.static_pages.home')->name('home');
// Route::view('/product-details', 'frontend.static_pages.products_details')->name('product.details');

Route::view('/address', 'frontend.static_pages.address')->name('address');
Route::view('/abouts', 'frontend.static_pages.abouts')->name('abouts');
Route::view('/price', 'frontend.static_pages.pricing')->name('price');
Route::view('/quality', 'frontend.static_pages.quality')->name('quality');
Route::view('/feedback', 'frontend.static_pages.feedback')->name('feedback');
Route::view('/distributor', 'frontend.static_pages.distributor')->name('distributor');
Route::view('/purchase-enquiry', 'frontend.static_pages.purchase_enquiry')->name('purchase.enquiry');
Route::view('/products', 'frontend.static_pages.products')->name('products');
Route::view('/nml-exhibitions', 'frontend.static_pages.nml_exhibitions')->name('nml.exhibitions');

Route::get('/product-details/{slug}', function ($slug) {
    $singleProduct = App\Models\ProductCategory::where('slug', $slug)->first();
    return view('frontend.static_pages.products_details', compact('singleProduct'));
})->name('product.details');

Route::get('product/sub-details/{slug}', function( $slug ){
    // dd($slug);
    $productCategory         = ProductCategory::where('slug', $slug)->first();
    $productSubCategories    = ProductSubCategory::where('status', 1)->where('category_id', $productCategory->id)->get();
    return view('frontend.static_pages.sub_product_details', compact('productCategory', 'productSubCategories'));
})->name('sub-product.details');

Route::get('product/child-details/{slug}', function($slug){
    // dd($slug);
    // $productSubCategory       = ProductSubCategory::where('status', 1)->where('slug', $slug)->first();
    $productSubCategory       =  DB::table('product_sub_categories')->join('product_categories', 'product_categories.id', '=', 'product_sub_categories.category_id' )
                                ->select('product_sub_categories.*', 'product_categories.slug as cat_slug', 'product_categories.title as cat_titles')
                                ->where('product_sub_categories.status', 1)
                                ->first();
    $productChildCategories   =   ProductChildCategory::where('status', 1)->where('subCategory_id', $productSubCategory->id)->get();
    return view('frontend.static_pages.child_product_details', compact('productSubCategory', 'productChildCategories'));
})->name('child-product.details');


Route::middleware('auth')->group(function (){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
