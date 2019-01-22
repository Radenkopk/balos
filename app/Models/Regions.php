<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $guarded = [];

    public static function activeRegion(){
        return self::where('active',1)->where('deleted_at', NULL)->get();
    }

    public static function addRegion($requeset){
        $data = new Regions($requeset->all());
        $data->save();
        return $data;
    }

    public static function allData(){
        return self::orderBy('created_at','DESC')
            ->whereNull('deleted_at')
            ->paginate(30);
    }

    public static function allDeletedData(){
        return self::orderBy('deleted_at','DESC')
            ->whereNotNull('deleted_at')
            ->paginate(30);
    }

}


