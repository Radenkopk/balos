@extends('admin.layouts.app')
@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/blog">Blog</a></li>
            <li class="breadcrumb-item"><a href="/admin/blog/{{$blog_id}}/destination">Destinacije</a></li>
            <li class="breadcrumb-item active" aria-current="page">slike</li>
        </ol>
    </nav>

    <div class="row">
        @foreach($allData as $data)
            <div class="col-md-3">
            <img src="/storage/destinations_images/{{$data->image}}"  class="img-thumbnail img-gallery">
            <form action="/admin/blog/{{$blog_id}}/destination/{{$destination_id}}/images-destinations/{{$data->id}}" method="post" class="d-inline" >
              {{ csrf_field() }}
              {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger "> obrisi</button>
            </form>
        </div>
        @endforeach
    </div>
    <br><br>
    <a href="/admin/blog/{{$blog_id}}/destination/{{$destination_id}}/images-destinations/create" class="btn btn-success">dodaj novu sliku</a>
@endsection
