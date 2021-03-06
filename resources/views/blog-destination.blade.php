@extends('layouts.app')
@section('content')
  <div class="container">


    <a class="text-secondary" href="/blog">BLOG</a>
    <span class="text-secondary ml-3"> | {{$blogData->title}}</span>
    <div class="line"></div>
    <div class="parga-content bg-light mt-5 text-justify text-muted">
    <h1>{{$blogData->title}}</h1>
            <img class="img-fluid my-5" src="/storage/cover_blog_image/{{$blogData->image}}">
            {!!$blogData->description!!}
            <br>
            <div class="line"></div>
            <br>

        @foreach ($destinationData as $destination)
            <h1>{{$destination->title}}</h1>
            <div>{!!$destination->description!!}</div>

            <div class="row ">
                @foreach($destination->images as $image)
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-3">
                        <a href="/storage/destinations_images/{{$image->image}}" data-lightbox="myGallery">
                            <img src="/storage/destinations_images/{{$image->image}}" class="img-thumbnail ">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        @endforeach
    </div>
<div class="line my-5"></div>
      </div>

    <br>
@endsection
