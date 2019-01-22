<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($blog_id)
    {

        $allData = Destination::allData($blog_id);
//        dd($allData);
        return view('admin.blog.destination.index')
            ->with('blog_id', $blog_id)
            ->with('allData', $allData);

    }

    public function deletedDestinations($blog_id)
    {

        $allDeleted = Destination::allDeletedData($blog_id);
        return view('admin.blog.destination.deleted')
            ->with('blog_id', $blog_id)
            ->with('allDeleted', $allDeleted);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blog_id)
    {
        return view('admin.blog.destination.create')
            ->with('blog_id', $blog_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $blog_id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ],[
            'title.required' => 'niste upisali naslov',
            'description.required' => 'niste upisali tekst'
        ]);

        Destination::addDestination($request);
        return Redirect("admin/blog/$blog_id/destination")->with('sucsess','uspešno ste napravili destinaciju!');
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
    public function edit( $blog_id , $id)
    {


        $data = Destination::find($id);
        return view("admin.blog.destination.update")
            ->with('data', $data)
            ->with('id',$id)
            ->with('blog_id',$blog_id);


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
        $data = Destination::find($request->id);

        $this->validate($request,[
           'title' => 'required',
           'description' => 'required'
        ],[
            'title.required' => 'niste upisali naslov',
            'description.required' => 'niste upisali tekst'
        ]);

        if (!$request->has('active')){
            $data->active = 0;
        }

        $data->update($request->all());


        if ($request->slug){
            $slug = str_slug($request->slug);
        }else{
            $slug = str_slug($request->title);
        }

        $check = Destination::where('slug',$slug)->where('id','!=', $id)->count();

        if ($check > 0) {
            return back()->with('error', 'slug je zauzet');
        }else{
            $data->slug = $slug;
            $data->save();
        }

        if ($data->deleted_at != NULL){

            $data->deleted_at = NULL;
            $data->save();
        }
        return redirect("admin/blog/$request->blog_id/destination")->with('sucsess','Uspešno ste ažurirali destinaciju !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog_id, $id)
    {
        $data = Destination::find( $id);
        if ($data->deleted_at != NULL) {
            $data->delete();
        }else{
            $data->deleted_at = now();
            $data->save();
        }


        return redirect("admin/blog/$blog_id/destination")->with('error','Uspešno ste obrisali destinaciju !');

    }
}
