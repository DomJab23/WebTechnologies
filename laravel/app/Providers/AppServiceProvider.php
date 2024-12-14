<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

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
        //
        RateLimiter::for("global", function (Request $request) 
        {
            return Limit::perMinute(60)->response(function(Request $request, array $headers){
                return response('Too many requests, please wait and try again later...', 429, $headers);
            });
        });

        RateLimiter::for('login', function (Request $request){
            return Limit::perMinutes(5,5)->response(function(Request $request, array $headers){
                return response('Too many login attempts, please try again later.', 429, $headers);
            });
        });

    }
}
