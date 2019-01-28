@extends('admin.layouts.app')
@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Apartmani</li>
        </ol>
    </nav>

    <div class="row">
        @foreach($allData as $data)
        <div class="col-md-3">
            <img src="/storage/cover_image/{{$data->cover_image}}"  class="img-thumbnail img-gallery">
        </div>
        @endforeach
        
        
    </div>
    <br> <br>
    <a href="/admin/apartmans/{{$apartmans_id}}/images-apartmans/create" class="btn btn-success">dodaj novu sliku</a>

@endsection