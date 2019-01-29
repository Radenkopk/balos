@extends('admin.layouts.app')

@section('content')
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger ">
                <strong>{{$error}}</strong>
            </div>
        @endforeach
    @endif

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/hotels">Hoteli</a></li>
            <li class="breadcrumb-item"><a href="/admin/hotels/{{$hotel_id}}/images-hotels">Slike</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dodaj novu sliku</li>
        </ol>
    </nav>
    <form class="input-admin" action="/admin/hotels/{{$hotel_id}}/images-hotels" method="post" enctype = "multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        <input class="btn btn-success" type="submit" value="SUBMIT">

    </form>

@endsection