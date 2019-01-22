<?php

namespace App\Providers;

use App\Models\Regions;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menuData = Regions::where('active',1)->whereNull('deleted_at')->get();
        view()->composer('*', function($view) use ($menuData){
           $view->with('menuData',$menuData);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
