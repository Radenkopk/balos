@extends('layouts.app')
@section('content')
<a class="text-secondary" href="/">POCETNA</a>
<span class="text-secondary ml-3"> | BLOG</span>
<div class="line"></div>
@foreach ($blogData as $data)


<div class="blog-content bg-light my-5">
  <h1>{{$data->title}}</h1>
  <img class="img-fluid my-5" src="images/panda.jpg" alt="">
  <div class="text-justify">
    {!!$data->description!!}
  </div>

  <a class="btn btn-blog text-uppercase" href="/blog-destination/{{$data->slug}}" role="button"><strong>Više o ovome...</strong></a>
</div>
@endforeach

<div class="line mb-5"></div>
@endsection
