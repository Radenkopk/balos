@extends('admin.layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/apartmans">Apartmani</a></li>
            <li class="breadcrumb-item"><a href="/admin/apartmans/{{$apartmans_id}}/images-apartmans">Slike</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dodaj novu sliku</li>
        </ol>
    </nav>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger ">
                <strong>{{$error}}</strong>
            </div>
        @endforeach
    @endif

    <form class="input-admin" action="/admin/apartmans/{{$apartmans_id}}/images-apartmans" method="post" enctype = "multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <input class="btn btn-success" type="submit" value="SUBMIT">
    </form>

@endsection