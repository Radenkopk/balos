@extends('admin.layouts.app')
@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/apartmans">Apartmani</a></li>
            <li class="breadcrumb-item active" aria-current="page">slike</li>
        </ol>
    </nav>

    <div class="row">
        @foreach($allData as $data)
            <div class="col-md-3">
            <img src="#"  class="img-thumbnail img-gallery">
            {{--<form action="/admin/apartmans/{{$apartmans_id}}/images-apartmans/{{$data->id}}" method="post" class="d-inline" >--}}
                {{--{{ csrf_field() }}--}}
                {{--{{method_field('DELETE')}}--}}
                {{--<button type="submit" class="btn btn-danger btnDelete"> obrisi</button>--}}
            {{--</form>--}}
        </div>
        @endforeach
    </div>
    <br><br>
    {{--<a href="/admin/apartmans/{{$apartmans_id}}/images-apartmans/create" class="btn btn-success">dodaj novu sliku</a>--}}
@endsection