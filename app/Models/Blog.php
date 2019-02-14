<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    public static function addBlog($request){
        $data = new Blog($request->all());

        if ($request->hasFile('image')) {
            $fileNameWithext = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithext, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/cover_blog_image', $fileNameToStore);
            
            $data->image = $fileNameToStore;
    }  else {
        
        $data->image = 'no-image.png';
    } 


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
