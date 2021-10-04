<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Site;
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
        //
       view()->composer(
            'layouts.app',
            function ($view) {
                $view->with('site', json_decode(Site::first()));
            }
        );
   }
}
