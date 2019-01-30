<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinationImages extends Model
{
    public static function addImage($request){

        $data = new DestinationImages($request->all());

        $data->parent_id = $request->destination_id;

        //        images
//        if ($request->hasFile('image')) {
        $fileNameWithext = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($fileNameWithext, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('image')->storeAs('public/destinations_images', $fileNameToStore);
        $data->image = $fileNameToStore;
//        }

        $data->save();

    }


    public static function allData( $destination_id){
        return self::where('parent_id',$destination_id)->get();
    }
}
