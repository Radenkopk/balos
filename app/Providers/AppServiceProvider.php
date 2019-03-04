<?php

namespace App\Providers;

use App\Models\Regions;
use App\Models\RegionCity;
use App\Models\Apartmans;
use App\Models\Hotels;
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
        foreach($menuData as  $menu){
           $checkCity = RegionCity::where('region_id',$menu->id)->whereNull('deleted_at')->count();
           if($checkCity == 0){
             $menu->show = 0;
           }else{
              $regionCityIds = RegionCity::where('region_id',$menu->id)->pluck('id');
              $check = Apartmans::whereIN('region_city_id',$regionCityIds)->whereNull('deleted_at')->count();


              if($check != 0){
                $menu->show = 1;
              }else{
                $menu->show = 0;
              }

              $checkHotels = Hotels::whereIN('region_city_id',$regionCityIds)->whereNull('deleted_at')->count();


              if($checkHotels != 0){
                $menu->showHotels = 1;
              }else{
                $menu->showHotels = 0;
              }

           }
        }


        $continental = Regions::where([
            ['island', 0],
            ['deleted_at', null],
            ['active', 1]
        ])->get();

          $islands = Regions::where('active',1)->where('island',1)->whereNull('deleted_at')->get();
          // dd($islands);
        view()->composer('*', function($view) use ($menuData,$islands, $continental){
           $view->with('menuData',$menuData)
                ->with('islands',$islands)
                ->with('continental',$continental);

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
