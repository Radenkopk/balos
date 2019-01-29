@extends('layouts.app')
@section('content')
<div class="line"></div>
<h1>FIRST MINUTE POPUSTI</h1>

<div class="owl-carousel owl-theme mb-5">
    @foreach($apartmanData as $data)
    <div class="item">
      <div class="card shadow">
        <a  href="/single-apartman/{{$data->slug}}">
        <img class="card-img-top" src="images/panda.jpg" alt="Card image" >
      </a>
      <div class="card-body">
        <h4 class="card-title">{{$data->title}}</h4>
        <p class="text-muted">{{$data->subtitle}}</p>
        <hr>
        <div class="card-text">{!!substr($data ->description1 , 0 , 100)!!}
        <a href="/single-apartman/{{$data->slug}}">Procitaj vise</a></div>
        <hr>
        <div class="d-flex justify-content-center">
          <a href="/single-apartman/{{$data->slug}}" class="btn btn-card">Detaljnije</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>
<h1>HOTELI</h1>
<div class="row ">
  @foreach($hotelData as $data)
  <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
    <div class="card shadow">
      <a  href="/single-hotel/{{$data->slug}}">
        <img class="card-img-top" src="images/panda.jpg" alt="Card image">
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
<h1>APARTMANI</h1>
<div class="row">
@foreach($apartmanDataHome as $data)
  <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
    <div class="card shadow">
      <a  href="/single-apartman/{{$data->slug}}">
        <img class="card-img-top" src="storage/apartmans_image/{{$data->image}}" alt="Card image">
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
</div>
<h1>PRICALI SMO O....</h1>
<div class="row">
  @foreach($blogData as $blog)
  <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
    <div class="card shadow">
      <a  href="/blog-destination/{{$blog->slug}}">
        <img class="card-img-top" src="images/panda.jpg" alt="Card image">
      </a>
      <div class="card-body">
        <h5 class="card-title">{{$blog->title}}</h5>
        <hr>
        <div class="d-flex justify-content-center">
          <a href="/blog-destination/{{$blog->slug}}" class="btn btn-card">PROCITAJ VISE</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection
