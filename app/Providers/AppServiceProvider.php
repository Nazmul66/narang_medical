<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\models\Category;
// use App\models\About;
// use App\models\Banner;
// use App\models\Service;
// use App\models\PricePlan;
// use App\models\Professional;
// use App\models\Project;
// use App\models\Safety;
// use App\models\Logo;
// use App\models\Review;
use App\models\BasicInfo;
use App\models\ProductCategory;
use App\models\Testimonial;
use App\models\MeetUs;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function($view)
        {
            // $about = About::getData();
            // $banner = Banner::getData();
            // $professional = Professional::getData();
            $basicInfo          = BasicInfo::getData();
            $productCategories  = ProductCategory::where('status', 1)->get();
            $testimonials       = Testimonial::where('status', 1)->get();
            $events             = MeetUs::where('status', 1)->take(4)->get();
            $events             = MeetUs::where('status', 1)->take(4)->get();


            $view->with([
                // 'banner' => $banner,
                // 'about' => $about,
                // 'professional' => $professional,
                'basicInfo' => $basicInfo,
                'productCategories' => $productCategories,
                'testimonials' => $testimonials,
                'events' => $events,
            ]);
        });


    }
}
