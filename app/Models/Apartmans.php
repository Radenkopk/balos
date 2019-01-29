<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartmans extends Model
{
    protected $guarded = [];

    public function City(){
        return $this->hasOne('App\Models\RegionCity', 'id','region_city_id');
    }



    public static function addApartman($request){
        $data = new Apartmans($request->all());

        $data->save();
        return $data;
    }


    public static function allData(){
        return self::orderBy('created_at','DESC')
            ->whereNull('deleted_at')
            ->with('City')
            ->paginate(30);
    }

    public static function allDeletedData(){
        return self::orderBy('created_at','DESC')
            ->with('City')
            ->whereNotNull('deleted_at')
            ->paginate(30);
    }
}
