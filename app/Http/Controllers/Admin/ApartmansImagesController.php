<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;

use App\Models\ApartmansImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApartmansImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($apartmans_id)
    {
        $allData = ApartmansImages::allData($apartmans_id);
        return view('admin.apartmans.images-apartmans.index')
            ->with('allData', $allData)
            ->with('apartmans_id', $apartmans_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($apartmans_id)
    {
        return view('admin.apartmans.images-apartmans.create')
            ->with('apartmans_id', $apartmans_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $aprtmans_id)
    {
        $this->validate($request,[
           'image' => 'required'
        ],[
            'image.required' => 'niste ubacili sliku'
        ]);

        ApartmansImages::adImage($request);
        return redirect("admin/apartmans/$aprtmans_id/images-apartmans")->with('sucsess', 'Uspešno ubacili sliku !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($apartmans_id ,$id)
    {

        $data = ApartmansImages::find($id);
//        dd($data->image);
        Storage::delete('/public/apartmans_image/'. $data->image);
        $data->delete();



//        Storage::delete('file.jpg');

        return back()->with('error', 'Uspešno ste obrisali  sliku !');    }
}
