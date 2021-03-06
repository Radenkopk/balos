@extends('admin.layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/blog">Blog</a></li>
            <li class="breadcrumb-item"><a href="/admin/blog/{{$blog_id}}/destination">Destinacije</a></li>
            <li class="breadcrumb-item"><a href="/admin/blog/{{$blog_id}}/destination/{{$destination_id}}/images-destinations">Slike</a></li>

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

    <form class="input-admin" action="/admin/blog/{{$blog_id}}/destination/{{$destination_id}}/images-destinations" method="post" enctype = "multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        <input class="btn btn-success" type="submit" value="SUBMIT">
    </form>

@endsection
