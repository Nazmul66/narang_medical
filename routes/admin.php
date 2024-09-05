<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\BasicInfoController;
use App\Http\Controllers\Backend\ProfessionalController;
use App\Http\Controllers\Backend\ServiceInfoController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\MeetUsController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\ProductSubCategoryController;
use App\Http\Controllers\Backend\ProductChildCategoryController;


// Route::view('/admin/login', 'backend.pages.login.index');


// Route::group(['prefix' => 'admin', 'middleware' => ['Is_admin', 'auth']], function(){
Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboards', [AdminController::class, 'dashboards'])->name('dashboards');

    //____  Banner  ____//
    Route::resource('banner', BannerController::class)->names('admin.banner');
    Route::get('/get-banner',[BannerController::class,'getData'])->name('admin.get-banner');
    Route::post('/banner/status',[BannerController::class,'adminBannerStatus'])->name('admin.banner.status');


    //____  Review  ____//
    Route::resource('review', ReviewController::class)->names('admin.review');
    Route::get('/get-review',[ReviewController::class,'getData'])->name('admin.get-review');
    Route::post('/review/status',[ReviewController::class,'adminReviewStatus'])->name('admin.review.status');


    //____  Product-Category  ____//
    Route::resource('product-category', ProductCategoryController::class)->names('admin.product-category');
    Route::get('/get-product-category',[ProductCategoryController::class,'getData'])->name('admin.get-product-category');
    Route::post('/product-category/status',[ProductCategoryController::class,'adminProductCategoryStatus'])->name('admin.product-category.status');


    //____  Product-SubCategory  ____//
    Route::resource('product-subCategory', ProductSubCategoryController::class)->names('admin.product-subCategory');
    Route::get('/product-subCategory/{id}',[ProductSubCategoryController::class,'singleProductSubCategory'])->name('single.admin.product-subCategory');
    Route::get('/get-product-subCategory',[ProductSubCategoryController::class,'getData'])->name('admin.get-product-subCategory');
    Route::post('/product-subCategory/status',[ProductSubCategoryController::class,'adminProductSubCategoryStatus'])->name('admin.product-subCategory.status');


    //____  Product-ChildCategory  ____//
    Route::resource('product-childCategory', ProductChildCategoryController::class)->names('admin.product-childCategory');
    Route::get('/get-product-childCategory',[ProductChildCategoryController::class,'getData'])->name('admin.get-product-childCategory');
    Route::post('/product-childCategory/status',[ProductChildCategoryController::class,'adminProductChildCategoryStatus'])->name('admin.product-childCategory.status');


    //____  Contact  ____//
    Route::resource('contact', ContactController::class)->names('admin.contact');
    Route::get('/get-contact',[ContactController::class,'getData'])->name('admin.get-contact');
    Route::post('/contact/status',[ContactController::class,'adminContactStatus'])->name('admin.contact.status');


    //____  Testimonial  ____//
    Route::resource('testimonial', TestimonialController::class)->names('admin.testimonial');
    Route::get('/get-testimonial',[TestimonialController::class,'getData'])->name('admin.get-testimonial');
    Route::post('/testimonial/status',[TestimonialController::class,'adminTestimonialStatus'])->name('admin.testimonial.status');


    //____  MeetUs  ____//
    Route::resource('meet-us', MeetUsController::class)->names('admin.meet-us');
    Route::get('/get-meet-us',[MeetUsController::class,'getData'])->name('admin.get-meet-us');
    Route::post('/meet-us/status',[MeetUsController::class,'adminMeetUsStatus'])->name('admin.meet-us.status');


    //____  Service Info  ____//
    Route::resource('service-info', ServiceInfoController::class)->names('admin.service-info');
    Route::post('/service-info/status',[ServiceInfoController::class,'adminServiceInfoStatus'])->name('admin.service-info.status');
    Route::get('/service-infos/{id}',[ServiceInfoController::class,'index_service_info'])->name('index.service.info');
    Route::get('/get-service-info-data/{id}',[ServiceInfoController::class,'get_all_service_info'])->name('get-service-info.data');


    //____ Service  ____//
    Route::resource('service', ServiceController::class)->names('admin.service');
    Route::get('/get-service',[ServiceController::class,'getData'])->name('admin.get-service');
    Route::post('/service/status',[ServiceController::class,'adminServiceStatus'])->name('admin.service.status');


    //____ BasicInfo  ____//
    Route::resource('basic-info', BasicInfoController::class)->names('admin.basic-info');


    //____ Professional  ____//
    Route::resource('professional', ProfessionalController::class)->names('admin.professional');


    //____ About  ____//
    Route::resource('about', AboutController::class)->names('admin.about');
});

