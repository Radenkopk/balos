@extends('admin.layouts.app')
@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Last minute</li>
        </ol>
    </nav>
    @foreach($allData as $data)
    <div>{!! $data->description !!}</div>

    <div class="btn-group" role="group" aria-label="Basic example">

        <a href="/admin/last-minute/{{$data->id}}/edit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> IZMENITE LAST MINUTE</a>
        <form class="d-inline" method="POST" action="/admin/last-minute/{{$data->id}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger btnDelete"><i class="fas fa-trash-alt"></i> OBRIŠI</button>
        </form>
    </div>

    <hr>

    @endforeach
    <a href="/admin/last-minute/create" class="btn btn-success">DODAJTE NOVI LAST MINUTE</a>
    <a href="/admin/last-minute/deleted" class=" btn btn-danger"><i class="fas fa-trash-alt"></i> OBRISANI LAST MINUTE</a>

@endsection