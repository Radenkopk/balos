<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotels;
use App\Models\RegionCity;
use App\Models\HotelImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('keyword')){
            $keyword = $request->keyword;
        }else{
            $keyword = false;
        };


        $allData = Hotels::allData($keyword);
        return view('admin.hotels.index')
            ->with('allData', $allData);
    }


    public function deletedHotels(){
        $allDeleted = Hotels::allDeletedData();
        return view('admin.hotels.deleted')
            ->with('allDeleted', $allDeleted);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regionCity = RegionCity::activeCity();
        return view('admin.hotels.create')
            ->with('regionCity', $regionCity);
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

        Hotels::addHotel($request);
        return redirect('admin/hotels')->with('sucsess', 'uspešno ste kreirali novi hotel !');
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
        $data = Hotels::find($id);
        $regionCity = RegionCity::activeCity();
        return view('admin.hotels.update')
            ->with('regionCity', $regionCity)
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
        $data = Hotels::find($id);

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
        if (!$request->has('home')){
            $data->home = 0;
        }

        if (!$request->has('active')){
            $data->active = 0;
        }
        $data->update($request->all());



        if($request->slug){
            $slug = str_slug($request->slug);
        }else{
            $slug = str_slug($request->title);
        }

        $check = Hotels::where('slug',$slug)->where('id','!=', $id)->count();

        if ($check > 0){
            return back()->with('error','slug je zauzet !');
        }else{
            $data->slug = $slug;
            $data->save();
        }

        if($data->deleted_at != NULL){
            $data->deleted_at = NULL;
            $data->save();
        }


        return redirect('admin/hotels')->with('sucsess', 'uspešno ste ažurirali hotel !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Hotels::find($id);

        if ($data->deleted_at != NULL ){
            $images = HotelImage::where('parent_id', $id)->pluck('image');
            foreach ($images as $image) {
                Storage::delete('/public/hotels_images/'. $image);
            }
            HotelImage::where('parent_id', $id)->delete();
            $data->delete();
        }else{
            $data->deleted_at = now();
            $data->save();
        }

        return redirect('admin/hotels')->with('error','uspešno ste obrisali hotel !');
    }


}
