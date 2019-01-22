@extends('layouts.app')
@section('content')
    <a class="text-secondary" href="/blog">BLOG</a>
    <span class="text-secondary ml-3"> | {{$blogData->title}}</span>
    <div class="line"></div>
    <div class="parga-content bg-light mt-5 text-justify text-muted">
        @foreach ($destinationData as $destination)
            <h1>{{$destination->title}}</h1>
             {{--<img class="img-fluid my-5" src="images/blog/parga/parga1.jpg" alt="">--}}
            <div>{!!$destination->description!!}</div>

            <div class="row ">
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-3">
                        <a href="/images/panda.jpg" data-lightbox="myGallery">
                            <img src="/images/panda.jpg" class="img-thumbnail ">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class=" mb-3">
                        <a href="/images/panda.jpg" data-lightbox="myGallery">
                            <img src="/images/panda.jpg" class="img-thumbnail ">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-3">
                        <a href="/images/panda.jpg" data-lightbox="myGallery">
                            <img src="/images/panda.jpg" class="img-thumbnail ">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class=" mb-3">
                        <a href="/images/panda.jpg" data-lightbox="myGallery">
                            <img src="/images/panda.jpg" class="img-thumbnail ">
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="line my-5"></div>
    <br>
@endsection
