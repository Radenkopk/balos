<?php

namespace App\Http\Controllers\Admin;

use App\Models\LastMinute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LastMinuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = LastMinute::allData();
        return view('admin.last-minute.index')->with('allData', $allData);
    }

    public function deletedLastMinute()
    {
        $allDeleted = LastMinute::allDeletedData();
        return view('admin.last-minute.deleted')->with('allDeleted', $allDeleted);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.last-minute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LastMinute::addLastMinute($request);
        return redirect('admin/last-minute')->with('sucsess', 'Uspesno napravjen novi Last minute');
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
        $data = LastMinute::find($id);
        return view('admin.last-minute.update')->with('data', $data);
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
        $data = LastMinute::find($id);
        $data->update($request->all());
        if ($data->deleted_at != NULL){
            $data->deleted_at = NULL;
            $data->save();
        }
        return redirect('admin/last-minute')->with('sucsess','uspešno ste izmenili last minute !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = LastMinute::find($id);
        if ($data->deleted_at !=  NULL){
            $data->delete();

        }else{
            $data->deleted_at = now();
            $data->save();
        }
        return redirect('admin/last-minute')->with('error','Last Minute je obrisan');
    }
}
