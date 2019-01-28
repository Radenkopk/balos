<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApartmansImages extends Model
{
    protected $guarded = [];
    public static function adImage($request){
        $data = new ApartmansImages($request->all());
        $data->parent_id = $request->apartmans_id;

//        images
        $fileNameWithext = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($fileNameWithext, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNameToStore);
        $data->cover_image = $fileNameToStore;


        $data->save();
    }

    public static function allData($apartmans_id){
        return self::where('parent_id', $apartmans_id)->get();
    }
}
