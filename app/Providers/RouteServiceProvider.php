<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers'; // Khai báo $namespace
    protected function configureRateLimiting()
    {
        RateLimiter::for('global', function (Request $request) {
            return \Illuminate\Cache\RateLimiting\Limit::perMinute(15)->by($request->ip());
        });
    }
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //cấu hình cho route của admin và client
        $this->configureRateLimiting();


        $this->routes(function(){
            Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));

            Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
        });
    }

}
