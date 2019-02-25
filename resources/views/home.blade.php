@extends('layouts.app')
@section('content')
<div class="line"></div>

<div class="container">
  <h1>FIRST MINUTE POPUSTI</h1>
<div class="owl-carousel owl-theme mb-5">
    @foreach($apartmanData as $data)
    <div class="item">
      <div class="card shadow">
        <a  href="/single-apartman/{{$data->slug}}" class="no-underline">
          <div class="discount text-center"
            @if($data->discount == 1) style="display: block"
            @else style="display: none"
            @endif >
            <p class="m-0">popust</p>
            <strong>{{ $data->discount1}}%</strong>
          </div>
          <img class="card-img-top" src="storage/cover_apartman_image/{{$data->image}}" alt="Card image" >

        <div class="home-card-title py-2">
          <h4 class="card-title mb-1">{{$data->title}}</h4>
        </div>
      </a>
        <div class="card-buttons">
          <div class="row">
            <div class="col-6 pr-0">
              <div class="button-a py-1">
                <a href="/single-city/{{$data->City->slug}} " class="m-0 pl-3 py-0 "><strong>{{$data->City->title}}</strong></a>
              </div>
            </div>
            <div class="col-6 pl-0" >
              <div class="button-b py-1">

                  <a href="">55</a>


              </div>



            </div>
          </div>


        </div>
      <div class="card-body">

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
</div>
{{-- <h1>HOTELI</h1>
<div class="row ">
  @foreach($hotelData as $data)
  <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
    <div class="card shadow">
      <a  href="/single-hotel/{{$data->slug}}">
        <img class="card-img-top" src="storage/cover_hotel_image/{{$data->image}}" alt="Card image">
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
</div> --}}
<div class="container-fluid background-citys">
  <div class="container">



<h1>MESTA</h1>
<div class="row">
@foreach($RegionCityHome as $city)
  <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
      <div class="card shadow">
          <a  href="/single-city/{{$city->slug}}">
          <img class="card-img-top" src="/storage/cover_city_image/{{$city->image}}" alt="Card image">
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
</div>
</div>
<div class="container">


<h1>PRICALI SMO O....</h1>
<div class="row">
  @foreach($blogData as $blog)
  <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
    <div class="card shadow">
      <a  href="/blog-destination/{{$blog->slug}}">
        <img class="card-img-top" src="storage/cover_blog_image/{{$blog->image}}" alt="Card image">
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
</div>
@endsection
