<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $guarded = [];

    public static function addDestination($request){
        $data = new Destination($request->all());
        $data->parent_id = $request->blog_id;
        $data->save();
    }

    public static function allData($blog_id){
    return self::where('parent_id', $blog_id)
        ->whereNull('deleted_at')
        ->orderBy('created_at', 'desc')->get();
    }

    public static function allDeletedData($blog_id){
        return self::where('parent_id', $blog_id)
            ->whereNotNull('deleted_at')
            ->paginate(30);
    }
}
