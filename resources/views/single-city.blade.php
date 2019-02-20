@extends('layouts.app')
@section('content')
<a class="text-secondary" href="/">pocetna</a>
<span class="text-secondary ml-3"> | {{$city->title}} </span>
<div class="line"></div>
<h2>{{$city->title}}</h2>
<div class="row my-5 text-center">
  <div class="col-lg-6">
    <a href="#" class="btn btn-card apr">APARTMANI</a>
  </div>
  <div class="col-lg-6">
    <a href="#" class="btn btn-card reg">O MESTU</a>
    </div>
</div>
<div class="d-block citys">
  <div class="row">
  @foreach ($apartmansData as $data)
    <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
      <div class="card shadow">
        <a  href="/single-apartman/{{$data->slug}}">
        <img class="card-img-top" src="/storage/cover_apartman_image/{{$data->image}}" alt="Card image">
        </a>
        <div class="card-body">
        <h5 class="card-title">{{$data->title}}</h5>
          <div class="d-flex justify-content-center">
            <a href="/single-apartman/{{$data->slug}}" class="btn btn-card">Detaljnije</a>
          </div>
        </div>
      </div>
    </div>
  @endforeach

  @foreach ($hotelsData as $data)
    <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
      <div class="card shadow">
        <a  href="/single-hotel/{{$data->slug}}">
        <img class="card-img-top" src="/storage/cover_hotel_image/{{$data->image}}" alt="Card image">
        </a>
        <div class="card-body">
        <h5 class="card-title">{{$data->title}}</h5>
          <div class="d-flex justify-content-center">
            <a href="/single-hotel/{{$data->slug}}" class="btn btn-card">Detaljnije</a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</div>

<div class="regions d-none">
  {!!$city->description!!}
</div>
@endsection
