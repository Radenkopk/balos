<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelImage extends Model
{
    protected $guarded = [];
    public static function addImage($request){

        $data = new HotelImage($request->all());
        $data->parent_id =  $request->hotel_id;

        //        images
//        if ($request->hasFile('image')) {
            $fileNameWithext = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithext, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/hotels_images', $fileNameToStore);
            $data->image = $fileNameToStore;
//        }

        $data->save();
    }

    public static function allData($hotel_id){
        return self::where('parent_id', $hotel_id)->get();
    }
}
