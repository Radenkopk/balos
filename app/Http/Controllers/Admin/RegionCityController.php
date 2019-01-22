<?php

namespace App\Http\Controllers\Admin;

use App\Models\RegionCity;
use App\Models\Regions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegionCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = RegionCity::allData();
//                foreach ($allData as $data){
//            dd($data);
//        }
        return view('admin.regions-city.index')->with('allData', $allData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regionData = Regions::activeRegion();
        return view('admin.regions-city.create')->with('regionData', $regionData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request, [
            'title' => 'required',

        ],[
            'title.required' => 'niste popunili naslov',
        ]);

        RegionCity::addCity($request);
        return redirect('admin/regions-city')->with('sucsses', 'Uspešno ste kreirali novi grad');
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

        $data = RegionCity::find($id);
        $regionData = Regions::activeRegion();
        return view('admin.regions-city.update')
            ->with('regionData', $regionData)
            ->with('data', $data);
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
        $data = RegionCity::find($id);

        $this-> validate($request, [
            'title' => 'required',

        ],[
            'title.required' => 'niste popunili naslov',
        ]);

        if (!$request->has('active')){
            $data->active = 0;
        }

        if ($data->deleted_at != NULL){
            $data->deleted_at = NULL;
        }

        $data->update($request->all());


        if ($request->slug){
            $slug = str_slug($request->slug);
        }else{
            $slug = str_slug($request->title);
        }

        $check = RegionCity::where('slug',$slug)->where('id','!=', $id)->count();

        if ($check > 0){
            return back()->with('error','slug je zuzet !');
        }else{
            $data->slug = $slug;
            $data->save();
        }

        return redirect('admin/regions-city')->with('sucsess','uspešno ažurirano !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = RegionCity::find($id);
        if ($data->deleted_at != NULL){
            $data->delete();
        }else{
            $data->deleted_at = now();
            $data->save();
        }

        return redirect('admin/regions-city')->with('error','uspešno obrisano !');
    }

    public function deletedCity(){
        $allDeleted = RegionCity::allDeletedData();
        return view('admin.regions-city.deleted')
            ->with('allDeleted', $allDeleted);
    }
}
