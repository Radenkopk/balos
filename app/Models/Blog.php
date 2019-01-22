<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    public static function addBlog($request){
        $data = new Blog($request->all());
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
