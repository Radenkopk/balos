<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $guarded = [];

    public static function addImage($request)
    {

        $data = new slider($request->all());


        //        images
        if ($request->hasFile('image')) {

            $fileNameWithext = $request->file('image')->getClientOriginalName();
            dd($fileNameWithext);
            $filename = pathinfo($fileNameWithext, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/slider_images', $fileNameToStore);
            $data->image = $fileNameToStore;

        }
        $data->save();


    }


    public static function allData(){
        return self::get();
    }
}
