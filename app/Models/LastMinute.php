<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LastMinute extends Model
{
    protected $guarded = [];

    public static function addLastMinute($request){
        $data = new LastMinute($request->all());
        $data->save();
        return $data;
    }

    public static function allData(){
        return self::whereNull('deleted_at')->get();
    }

    public static function allDeletedData(){
        return self::whereNotNull('deleted_at')->get();
    }
}
