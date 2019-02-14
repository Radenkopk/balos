<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $guarded = [];

    public function City(){
        return $this->hasOne('App\Models\RegionCity','id','region_city_id');
    }

    public static function addHotel($request){
        $data = new Hotels($request->all());

        if ($request->hasFile('image')) {
            $fileNameWithext = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithext, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // dd($fileNameToStore);
            $path = $request->file('image')->storeAs('public/cover_hotel_image', $fileNameToStore);
            
            $data->image = $fileNameToStore;
    }  else {
        
        $data->image = 'no-image.png';
    } 
   

        $data->save();
        return $data;
    }

    public static function allData($keyword = false){

        if ($keyword){
            return self::orderBy('created_at','DESC')
                ->with('City')
                ->whereRaw('lower(title) like "%' . strtolower($keyword) . '%"')
                ->whereNull('deleted_at')
                ->paginate(30);
        }else{
          return self::orderBy('created_at','DESC')
              ->with('City')
              ->whereNull('deleted_at')
              ->paginate(30);
        }


    }

    public static function allDeletedData(){
        return self::orderBy('deleted_at', 'DESC')
            ->whereNotNull('deleted_at')
            ->with('City')
            ->paginate(30);
    }

}
