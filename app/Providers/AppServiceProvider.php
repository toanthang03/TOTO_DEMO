<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Brand;
use App\Models\Category;

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
        view()->composer('*', function ($view) {
            $brands = Brand::all();
            $category = Category::all();
            $view->with(compact('brands', 'category'), $brands, $category);
        });
        
    }
}
