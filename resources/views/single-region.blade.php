@extends('layouts.app')
@section('content')
    <a class="text-secondary" href="/">POCETNA</a>
    <span class="text-secondary ml-3"> | {{$region->title}}</span>
    <div class="line"></div>
    <h1>{{$region->title}}</h1>
    <div class="row my-4">
        @foreach($cityData as $city)
        <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
            <div class="card shadow">
                <a  href="#">
                    <img class="card-img-top" src="images/edipsos.jpg" alt="Card image">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{$city->title}}</h5>
                    <div class="d-flex justify-content-center">
                        <a href="/single-city/{{$city->slug}}" class="btn btn-card">Detaljnije</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
