@extends('admin.layouts.app')
@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/regions-city">Grad</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dodajte novi grad</li>
        </ol>
    </nav>

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger ">
                <strong>{{$error}}</strong>
            </div>
        @endforeach
    @endif
    <form class="input-admin" action="/admin/regions-city" method="post" enctype = "multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Unesite naslov</label>
            <input name="title" type="text" class="form-control " id="title" placeholder="Unesite naslov">
        </div>


        <div class="form-group">
            {{Form::file('image')}}
        </div>

        <div class="form-group">
            <label for="article-ckeditor">Tekst</label>
            <textarea name="description" class="form-control" id="article-ckeditor" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="region">Izaberite regiju</label>
            <select class="form-control" name="region_id" id="region">
                <option>Izaberite regiju</option>
                @foreach($regionData as $region)
                <option value="{{$region->id}}">{{$region->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="checkbox">
            <label><input name="active" type="checkbox" value="1">Aktivno</label>

        </div>
        <input class="btn btn-success " type="submit" value="SUBMIT">

    </form>
@endsection
