<?php

namespace App\Http\Controllers;

use App\Models\Apartmans;
use App\Models\ApartmansImages;
use App\Models\Blog;
use App\Models\Destination;
use App\Models\HotelImage;
use App\Models\Hotels;
use App\Models\LastMinute;
use App\Models\RegionCity;
use App\Models\Regions;
use Illuminate\Http\Request;

class PagesController extends Controller

{
    public function home(){
        $apartmanData = Apartmans::where('active',1)
            ->whereNull('deleted_at')->get();
        $apartmanDataHome = Apartmans::where('home',1)
            ->where('active',1)
            ->whereNull('deleted_at')->get();
        $hotelData = Hotels::where('home',1)->where('active',1)
            ->whereNull('deleted_at')->get();
        $blogData = Blog::where('home',1)
            ->where('active',1)
            ->whereNull('deleted_at')
            ->get();
        return view('home')
            ->with('hotelData', $hotelData)
            ->with('apartmanData', $apartmanData)
            ->with('blogData', $blogData)
            ->with('apartmanDataHome', $apartmanDataHome);
    }

    public function singleApartman($slug){
        $apartman = Apartmans::where('slug',$slug)->where('active',1)
            ->whereNull('deleted_at')
            ->first();
        $imageApartman = ApartmansImages::where('parent_id', $apartman->id)->get();
        return view('single-apartman')
            ->with('imageApartman', $imageApartman)
            ->with('apartman', $apartman);
    }

    public function singleHotel($slug){
        $hotel = Hotels::where('slug',$slug)
            ->where('active',1)
            ->whereNull('deleted_at')
            ->first();
        $imagesHotel = HotelImage::where('parent_id', $hotel->id)->get();
        return view('single-hotel')
            ->with('hotel',$hotel)
            ->with('imagesHotel', $imagesHotel);
    }

    public function singleRegion($slug){
        $region = Regions::where('slug',$slug)
            ->whereNull('deleted_at')
            ->where('active',1)
            ->first();
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

        foreach ($cityData as $city){
            //da qverujes apartmants i da vidis dal neki apartman ima taj grad
            //ako ga ima city ostaje//
            //ako ga nema unsetuj ga
        }

       if($type == 'hotels'){
           //uzmi podatke iz baze za hotele
//           dd($cityData);
//           $proba = Hotels::where('region_city_id', )->get();
//           dd($proba);

       }
       if($type == 'apartmans'){
//           $apartman = Apartmans::where('active',1)->first();
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


