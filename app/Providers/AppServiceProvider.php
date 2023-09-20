<?php

namespace App\Providers;

use App\Models\Activitie;
use App\Models\Category;
use App\Models\Country;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        view()->share('categories', $categories);

        $countries = Country::withCount('jobs')->get();
        view()->share('countries', $countries);


        $activities_footer =  Activitie::latest()->take(3)->get();
        view()->share('activities_footer', $activities_footer);
    }
}
