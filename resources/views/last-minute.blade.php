@extends('layouts.app')
@section('content')
  <div class="container">


<a class="text-secondary" href="/">pocetna</a>
<span class="text-secondary ml-3"> | last-minute</span>
<div class="line mb-4"></div>
    @foreach($lastMinute as $data)
    <div class="last-minute bg-light p-4 shadow rounded text-secondary">
        <div>{!!$data->description!!}</div>
    </div>
    @endforeach
      </div>
@endsection
