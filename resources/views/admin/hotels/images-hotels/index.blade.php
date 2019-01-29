@extends('admin.layouts.app')
@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/hotels">Hoteli</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slike</li>
        </ol>
    </nav>

    <div class="row">
        @foreach($allData as $data)
        <div class="col-md-3">
            <img src="/storage/hotels_images/{{$data->image}}" class="img-thumbnail img-gallery">

            <form action="/admin/hotels/{{$hotel_id}}/images-hotels/{{$data->id}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger btnDelete" > OBRISI</button>
            </form>
            
        </div>
        @endforeach
    </div>
    <br> <br>
    <a href="/admin/hotels/{{$hotel_id}}/images-hotels/create" class="btn btn-success">dodaj novu sliku</a>

@endsection