<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Blog::allData();
        return view('admin.blog.index')->with('allData', $allData);
    }

    public function deletedBlog()
    {
        $allDeleted = Blog::allDeletedData();
        return view('admin.blog.deleted')->with('allDeleted', $allDeleted);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ],[
            'title.required' => 'Niste uneli naslov',
            'description.required' => 'Niste uneli tekst'
        ]);


        Blog::addBlog($request);
        return redirect('admin/blog')->with('sucsess','Uspešno ste napravili blog');
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
        $data = Blog::find($id);
        return view('admin.blog.update')->with('data', $data);
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
        $data = Blog::find($id);

        if (!$request->has('home')){
            $data->home = 0;
        }

        if (!$request->has('active')){
            $data->active = 0;
        }

        if ($data->deleted_at != NULL ){
            $data->deleted_at = NULL;
        }

        $data->update($request->all());

        if ($request->slug){
            $slug = str_slug($request->slug);
        }else{
            $slug = str_slug($request->title);
        }

        $check = Blog::where('slug', $slug)->where('id','!=', $id)->count();

        if ($check > 0){
            return back()->with('error','slug je zauzet !');
        }else{
            $data->slug = $slug;
            $data->save();
        }

        return redirect('admin/blog')->with('sucsess', 'uspešno ste ažurirali blog !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::find($id);
        if ($data->deleted_at !=  NULL){
            Destination::where('parent_id',$id)->delete();
            $data->delete();
        }else{
            $data->deleted_at = now();
            $data->save();
        }



        return redirect('admin/blog')->with('error', 'uspešno ste obrisali blog !');

    }
}
