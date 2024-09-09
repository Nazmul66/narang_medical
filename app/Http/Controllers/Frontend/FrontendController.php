<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\productCategory;
use App\Models\ProductSubCategory;
use App\Models\ProductChildCategory;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{

    public function home()
    {
        return view('frontend.static_pages.home');
    }

    public function address()
    {
        return view('frontend.static_pages.address');
    }

    public function abouts()
    {
        return view('frontend.static_pages.abouts');
    }

    public function price()
    {
        return view('frontend.static_pages.pricing');
    }

    public function quality()
    {
        return view('frontend.static_pages.quality');
    }

    public function feedback()
    {
        return view('frontend.static_pages.feedback');
    }

    public function distributor()
    {
        return view('frontend.static_pages.distributor');
    }

    public function purchase_enquiry()
    {
        return view('frontend.static_pages.purchase_enquiry');
    }

    public function nml_exhibitions()
    {
        return view('frontend.static_pages.nml_exhibitions');
    }

    // products
    public function products()
    {
        return view('frontend.static_pages.products');
    }

    // Category Products
    public function products_details($slug)
    {
        $singleProduct = ProductCategory::where('slug', $slug)->first();
        return view('frontend.static_pages.products_details', compact('singleProduct'));
    }

    // SubCategory Products
    public function sub_products_details($slug)
    {
        $productCategory         = ProductCategory::where('slug', $slug)->first();
        $productSubCategories    = ProductSubCategory::where('status', 1)->where('category_id', $productCategory->id)->get();
        return view('frontend.static_pages.sub_product_details', compact('productCategory', 'productSubCategories'));
    }

    // ChildCategory Products
    public function child_products_details($slug)
    {
         $productSubCategory  =  DB::table('product_sub_categories')
                                ->join('product_categories', 'product_categories.id', '=', 'product_sub_categories.category_id' )
                                ->select('product_sub_categories.*', 'product_categories.slug as cat_slug', 'product_categories.title as cat_titles')
                                ->where('product_sub_categories.slug', $slug)
                                ->where('product_sub_categories.status', 1)
                                ->first();
        $productChildCategories   =   ProductChildCategory::where('status', 1)->where('subCategory_id', $productSubCategory->id)->get();
        // $productChildCategory   =   ProductChildCategory::where('status', 1)->where('subCategory_id', $productSubCategory->id)->first();
        return view('frontend.static_pages.child_product_details', compact('productSubCategory', 'productChildCategories'));
    }

}
