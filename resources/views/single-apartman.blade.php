@extends('layouts.app')

@section('content')
  <div class="container">


<a class="text-secondary" href="/">pocetna</a>
<span class="text-secondary ml-3"> | {{$apartman->title}}</span>
<div class="line"></div>
<div class="row mt-4">
  <div class="col-lg-3 col-sm-12">
    <ul  class="lista p-0">
      <li class="list-group-item-dark proba"><span class="triangle-right"></span><strong>Foto galerija i opis</strong></li>
      <li class="list-group-item-dark"><strong><i class="fas fa-thumbtack"></i> Lokacija</strong></li>
      <li class="list-group-item-dark"><strong>Video</strong></li>
      <li class="list-group-item-dark"><strong>Program putovanja</strong></li>
      <li class="list-group-item-dark"><strong>Uslovi plaćanja</strong></li>
      <li class="list-group-item-dark"><strong>cenovnik</strong></li>
    </ul>
  </div>
  <div class="col-lg-9 col-sm-12">
    <!-- DESCRIPTION -->
    <h1 class="gallery ">{{$apartman->title}}</h1>
    <div class="gallery ">{!! $apartman->description1 !!}</div>
    <!-- GALLERY -->
    <div class="gallery ">
      <div class="row ">
        @foreach($imageApartman as $image)
        <div class="col-lg-3 col-sm-6">
          <div class="pic-with mb-3">
            <a href="/storage/apartmans_image/{{$image->image	}}" data-lightbox="myGallery" data-title="opis za sliku">
              <img src="/storage/apartmans_image/{{$image->image	}}" class="img-thumbnail ">
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-- DESCRIPTION 2 -->
    <div class="gallery ">{!! $apartman->description2 !!}</div>
    <!-- GOOGLE MAP -->
    <div  class="map d-none">
      <iframe  src="{{$apartman->location}}" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- video -->
    <div class="video d-none">
      <iframe width="100%" height="500" src="{!!  $apartman->video !!}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <!-- program putovanja -->
    <div class="travel-program bg-light d-none">
    {!! $apartman->travel_program !!}
    </div>

    <!-- uslovi placanja -->
    <div class="payment bg-light d-none">
      <h1>Uslovi plaćanja</h1>
      <div class="line mb-5"></div>
      <ul class="ml-4">
        <li><strong class="position-li">30% prilikom prijavljivanja, ostatak najkasnije 15 dana pre datuma polaska na put.</strong></li>
        <li><strong class="position-li">Čekovima građana</strong></li>
        <li><strong class="position-li">Sve cene su izražene u evrima, a plaćanje se vrši u
          dinarskoj protivvrednosti po prodajnom kursu poslovne banke na dan uplate</strong></li>
      </ul>
    </div>
    <!-- cenovnik -->
    <div class="price d-none bg-light">
    {!! $apartman->pricelist !!}

    </div>


  </div>
</div>
  </div>

@endsection
