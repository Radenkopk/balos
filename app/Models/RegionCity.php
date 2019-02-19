<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegionCity extends Model
{
    protected $guarded = [];

    public function Region(){
        return $this->hasOne('App\Models\regions','id','region_id');
    }

    public static function activeCity(){
        return self::where('active',1)->whereNull('deleted_at')->get();
    }
    public static function addCity($request){
        $data = new RegionCity($request->all());

        if ($request->hasFile('image')) {
            $fileNameWithext = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithext, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/cover_city_image', $fileNameToStore);
            
            $data->image = $fileNameToStore;
    }  else {
        
        $data->image = 'no-image.png';
    } 


        $data->save();
        return $data;
    }

    public static function allData(){
        return self::orderBy('created_at','DESC')
            ->with('Region')
            ->whereNull('deleted_at')
            ->paginate(30);
    }

    public static function allDeletedData(){
        return self::orderBy('deleted_at','DESC')
            ->whereNotNull('deleted_at')
            ->paginate(30);
    }
}
