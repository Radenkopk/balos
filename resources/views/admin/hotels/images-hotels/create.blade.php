@extends('admin.layouts.app')

@section('content')
    <form class="input-admin" action="/admin/hotels/{{$hotel_id}}/images-hotels" method="post" enctype = "multipart/form-data">
        {{ csrf_field() }}
        <h1>FOTO GALERIJA I OPIS</h1>
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        <input class="btn btn-success" type="submit" value="SUBMIT">

    </form>

@endsection