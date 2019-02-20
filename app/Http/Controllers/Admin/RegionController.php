<?php

namespace App\Http\Controllers\Admin;

use App\Models\Regions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Regions::allData();
        return view('admin.regions.index')->with('allData', $allData);
    }

    public function deletedRegions(){
        $allDeleted = Regions::allDeletedData();
        return view('admin.regions.deleted')
            ->with('allDeleted', $allDeleted);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.regions.create');
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
            'description' => 'required'

        ],[
            'title.required' => 'niste popunili naslov',
            'description.required' => 'niste popunili tekst'
        ]);
       Regions::addRegion($request);
       return redirect('admin/regions')->with('sucsess','Uspesno napravljena nova regija !');

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
        $data = Regions::find($id);
        return view('admin.regions.update')->with('data', $data);
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
        $data = Regions::find($id);

        $this-> validate($request, [
            'title' => 'required',
            'description' => 'required'

        ],[
            'title.required' => 'niste popunili naslov',
            'description.required' => 'niste popunili tekst'
        ]);

        if (!$request->has('active')){
            $data->active = 0;
        }

        if ($data->deleted_at != NULL){
            $data->deleted_at = NULL;
        }

        if(!$request->has('island')){
          $data->island = 0;
        }

        $data->update($request->all());




        if ($request->slug){
            $slug = str_slug($request->slug);
        }else{
            $slug = str_slug($request->title);
        }

        $check = Regions::where('slug', $slug)->where('id','!=', $id )->count();

        if ($check > 0){
            return back()->with('error', 'slug je zauzet');
        }else{
            $data->slug = $slug;
            $data->save();
        }
        return redirect('admin/regions')->with('sucsess','Uspesno izemenjena regija !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Regions::find($id);
        if ($data->deleted_at != NULL) {
            $data->delete();
        }else{
            $data->deleted_at = now();
            $data->save();
        }
        return redirect('admin/regions')->with('error','Uspešno obrisana regija !');

    }


}
