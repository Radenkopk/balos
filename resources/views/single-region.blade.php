@extends('layouts.app')
@section('content')
  <div class="container">

    <a class="text-secondary" href="/">POCETNA</a>
    <span class="text-secondary ml-3"> | {{$region->title}}</span>
    <div class="line"></div>
    <h1>{{$region->title}}</h1>
    <div class="row my-5 text-center">
      <div class="col-lg-6 col-sm-6">
      <a href="#" class="btn btn-card apr">MESTA</a>
    </div>
    <div class="col-lg-6 col-sm-6">
    <a href="#" class="btn btn-card reg">OPIS REGIJE</a>
    </div>
    </div>
    <div class="row my-4 citys">
        @foreach($cityData as $city)
        <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
            <div class="card shadow">
                <a  href="/single-city/{{$city->slug}}/{{$type}}">
                <img class="card-img-top" src="/storage/cover_city_image/{{$city->image}}" alt="Card image">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{$city->title}}</h5>
                    <div class="d-flex justify-content-center">
                        <a href="/single-city/{{$city->slug}}/{{$type}}" class="btn btn-card">Detaljnije</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-none regions">{!!$region->description!!}</div>

  </div>
@endsection
