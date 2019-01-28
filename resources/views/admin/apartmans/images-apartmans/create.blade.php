@extends('admin.layouts.app')

@section('content')

    {{--<form  enctype="multipart/form-data" method="post">--}}
    <form class="input-admin" action="/admin/apartmans/{{$apartmans_id}}/images-apartmans" method="post" enctype = "multipart/form-data">
        {{ csrf_field() }}
        <h1>FOTO GALERIJA I OPIS</h1>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <input class="btn btn-success" type="submit" value="SUBMIT">

    </form>

@endsection