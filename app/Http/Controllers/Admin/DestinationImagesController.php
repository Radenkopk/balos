<?php

namespace App\Http\Controllers\Admin;


use App\Models\Destination;
use App\Models\DestinationImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinationImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($blog_id,$destination_id)
    {
//dd($blog_id,$destination_id);
        $allData = DestinationImages::allData($destination_id);
        return view('admin.blog.destination.images-destinations.index')
            ->with('allData', $allData)
            ->with('blog_id',$blog_id)
            ->with('destination_id', $destination_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blog_id,$destination_id)
    {


        return view('admin.blog.destination.images-destinations.create')
            ->with('blog_id',$blog_id)
            ->with('destination_id', $destination_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$blog_id, $destination_id)
    {
        DestinationImages::addImage($request);
        return redirect("admin/blog/$blog_id/destination/$destination_id/images-destinations")
            ->with('sucsess','uspesno ste ubacili sliku');
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
    public function destroy($id)
    {
        //
    }
}
