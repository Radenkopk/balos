<?php

namespace App\Http\Controllers\Admin;

use App\Models\Apartmans;
use App\Models\RegionCity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApartmansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Apartmans::allData();
//        foreach ($allData as $data){
//            dd($data);
//        }

        return view('admin.apartmans.index')->with('allData', $allData);
    }


    public function deletedApartmans()
    {
        $allData = Apartmans::allDeletedData();

        return view('admin.apartmans.deleted')->with('allData', $allData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cityData = RegionCity::activeCity();
        return view('admin.apartmans.create')->with('cityData', $cityData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
            'subtitle'=> 'required',
            'description1' => 'required',
            'video' => 'required',
            'travel_program' => 'required',
            'payment' => 'required',
            'pricelist' => 'required',
//            'region_city_id' => 'required',

        ],[
            'title.required' => 'niste popunili naslov!',

            'subtitle.required' => 'niste popunili podnaslov!',
            'description1.required' => 'niste popunili description!',
            'video.required' => 'niste popunili video!',
            'travel_program.required' => 'niste popunili program putovanja!',
            'payment.required' => 'niste popunili uslovi placanja!',
            'pricelist.required' => 'niste popunili cenovinik!',
//            'region_city_id.required' => 'niste izabrali grad!'
        ]);

        $fileNameWithext = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($fileNameWithext, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNameToStore);
        Apartmans::addApartman($request);
        $request->cover_image = $fileNameToStore;
        return redirect('admin/apartmans')->with('sucsess', 'Uspešno kreiran apartman !');
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
        $data = Apartmans::find($id);
        $cityData = RegionCity::activeCity();
        return view('admin.apartmans.update')
            ->with('cityData', $cityData)
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
        $data = Apartmans::find($id);

        $this->validate($request, [
            'title'=> 'required',
            'subtitle'=> 'required',
            'description1' => 'required',
            'video' => 'required',
            'travel_program' => 'required',
            'payment' => 'required',
            'pricelist' => 'required',
            'region_city_id' => 'required',

        ],[
            'title.required' => 'niste popunili naslov!',

            'subtitle.required' => 'niste popunili podnaslov!',
            'description1.required' => 'niste popunili description!',
            'video.required' => 'niste popunili video!',
            'travel_program.required' => 'niste popunili program putovanja!',
            'payment.required' => 'niste popunili uslovi placanja!',
            'pricelist.required' => 'niste popunili cenovinik!',
            'region_city_id.required' => 'niste izabrali grad!'
        ]);

        if (!$request->has('home')){
            $data->home = 0;
        }


        if (!$request->has('active')){
            $data->active = 0;
        }
        $data->update($request->all());

        if ($request->slug){
            $slug = str_slug($request->slug);
        }else{
            $slug = str_slug($request->title);
        }

        $check = Apartmans::where('slug',$slug)->where('id','!=', $id)->count();

        if ($check > 0){
//
            return back()->with('error','Slug je zauzet.');
        }else{
            $data->slug = $slug;
            $data->save();
        }


        if($data->deleted_at != NULL){
            $data->deleted_at = NULL;
            $data->save();
        }

        return redirect('admin/apartmans')->with('sucsess','Uspešno ste ažurirali apartman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Apartmans::find($id);

        if($data->deleted_at != NULL){
            $data->delete();
        }else {
            $data->deleted_at = now();
            $data->save();
        }
        return redirect('admin/apartmans')->with('error', 'Uspešno ste obrisali apartman !');
    }
}
