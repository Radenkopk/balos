<?php

namespace App\Http\Controllers;

use App\Models\Apartmans;
use App\Models\ApartmansImages;
use App\Models\Blog;
use App\Models\Destination;
use App\Models\DestinationImages;
use App\Models\HotelImage;
use App\Models\Hotels;
use App\Models\LastMinute;
use App\Models\RegionCity;
use App\Models\Regions;
use Illuminate\Http\Request;

class PagesController extends Controller

{
    public function home(){
        $apartmanData = Apartmans::where([
            ['active',1],
            ['deleted_at', null],
        ])->get();
        $apartmanDataHome = Apartmans::where([
            ['home', 1],
            ['active', 1],
            ['deleted_at', null],
        ])->get();
        $hotelData = Hotels::where([
            ['home',1],
            ['active',1],
            ['deleted_at', null],
        ])->get();

        $blogData = Blog::where([
            ['home',1],
            ['active',1],
            ['deleted_at', null],
        ])->get();

        return view('home')
            ->with('hotelData', $hotelData)
            ->with('apartmanData', $apartmanData)
            ->with('blogData', $blogData)
            ->with('apartmanDataHome', $apartmanDataHome);
    }

    public function singleApartman($slug){
        $apartman = Apartmans::where([
            ['slug',$slug],
            ['active',1],
            ['deleted_at', null],
        ])->first();

        $imageApartman = ApartmansImages::where('parent_id', $apartman->id)->get();
        return view('single-apartman')
            ->with('imageApartman', $imageApartman)
            ->with('apartman', $apartman);
    }

    public function singleHotel($slug){

        $hotel = Hotels::where([
            ['slug', $slug],
            ['active',1],
            ['deleted_at', null],
        ])->first();

        $imagesHotel = HotelImage::where('parent_id', $hotel->id)->get();

        return view('single-hotel')
            ->with('hotel',$hotel)
            ->with('imagesHotel', $imagesHotel);
    }

    public function singleRegion($slug){
        $region = Regions::where([
            ['slug', $slug],
            ['active',1],
            ['deleted_at', null],
        ])->first();

        $id = $region->id;
        $cityData = RegionCity::where('region_id', $id)->get();

        return view('single-region')
            ->with('region', $region)
            ->with('cityData',$cityData );
    }


    public function singleRegionType($slug,$type){
        $region = Regions::where('slug',$slug)->where('active',1)->first();
        $id = $region->id;
        $cityData = RegionCity::where('region_id', $id)->get();

        foreach ($cityData as $key => $city ){
            
            if($type == 'hotels'){
                $hotelsCheck = Hotels::where('region_city_id', $city->id)->count();
                if ($hotelsCheck == 0) {
                    unset($cityData[$key]);
                }
            }

        }

        foreach($cityData as $key => $city){
            if ($type == "apartmans") {
                $apartmansCheck = Apartmans::where('region_city_id', $city->id)->count();
                if ($apartmansCheck == 0) {
                    // dd($cityData[$key]);
                    unset($cityData[$key]);
                }
            }
        }

        return view('single-region')
            ->with('region', $region)
            ->with('cityData',$cityData );
//            ->with('hotel',$hotel);
//            ->with('apartman',$apartman);
    }

    public function singleCity($slug){
        $city = RegionCity::where('active',1)->where('slug',$slug)->first();
        return view('single-city')
            ->with('city', $city);
    }

    public function contact(){
        return view('contact');
    }

    public function blog(){
        $blogData = Blog::where('active',1)->whereNull('deleted_at')->get();
        return view('blog')
            ->with('blogData',$blogData);
    }

    public function destination($slug){



        $blogData = Blog::where('active',1)->where('slug',$slug)->first();
        $destinationData = Destination::where('parent_id',$blogData->id )

            ->whereNull('deleted_at')
            ->where('active',1)
            ->get();
        foreach ($destinationData as $data) {
            $images = DestinationImages::where('parent_id', $data->id)->get();
            $data->images = $images;
        }
        return view('blog-destination')
            ->with('destinationData', $destinationData)
            ->with('slug',$slug)
            ->with('blogData', $blogData);

    }

    public function lastMinute(){
        $lastMinute = LastMinute::get();
        return view('last-minute')
            ->with('lastMinute',$lastMinute);
    }

}


