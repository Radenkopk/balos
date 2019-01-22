@extends('admin.layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/hotels">Hoteli</a></li>
            <li class="breadcrumb-item active" aria-current="page">Izmeni hotel</li>
        </ol>
    </nav>

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger ">
                <strong>{{$error}}</strong>
            </div>
        @endforeach
    @endif

    {!! Form::model($data, ['route' => ['hotels.update', $data->id], 'method' => 'PUT', 'class' => 'input-admin']) !!}
    {{ csrf_field() }}
    {{-- <h1>FOTO GALERIJA I OPIS</h1> --}}
    {{-- <div class="form-group">
      <label for="picture">Import Picture</label>
      <input name="image" type="file" class="form-control-file" id="picture" aria-describedby="fileHelp">
    </div> --}}
    <div class="form-group">
        <label for="title">Naslov</label>
        <input name="title" value="{{$data->title}}"  type="text" class="form-control" id="title" placeholder="Unesite naslov">
    </div>
    <div class="form-group">
        <label for="subtitle">Subtitle</label>
        <input name="subtitle" value="{{$data->subtitle}}"  type="text" class="form-control" id="subtitle" placeholder="Unesite podnaslov">
    </div>
    <div class="form-group">
        <label for="article-ckeditor">Tekst-1</label>
        <textarea name="description1" class="form-control" id="article-ckeditor" rows="3">{!! $data->description1 !!}</textarea>
    </div>
    <div class="form-group">
        <label for="article-ckeditor">Tekst-2</label>
        <textarea name="description2" class="form-control" id="article-ckeditor-1" rows="3">{!! $data->description2 !!}</textarea>
    </div>
    <h1>lokacija</h1>
    <div class="form-group">
        <label for="video">Unesite URL</label>
        <input name="video" type="text" value="{{$data->video}}" class="form-control" id="video" placeholder="Unesite url">
    </div>
    <div class="form-group">
        <label for="article-ckeditor">Program putovanja</label>
        <textarea name="travel_program" class="form-control" id="article-ckeditor-2" rows="3">{!! $data->travel_program !!}</textarea>
    </div>
    <div class="form-group">
        <label for="article-ckeditor">Uslovi placanja</label>
        <textarea name="payment" class="form-control" id="article-ckeditor-3" rows="3">{!! $data->payment !!}</textarea>
    </div>
    <div class="form-group">
        <label for="article-ckeditor">Cenovnik</label>
        <textarea name="pricelist" class="form-control" id="article-ckeditor-4" rows="3">{!! $data->pricelist !!}</textarea>
    </div>
    <div class="form-group">
        <label for="city">Example select</label>
        <select class="form-control" name="region_city_id" id="city">
            <option>Izaberite grad</option>
            @foreach($regionCity as $city)
                <option value="{{$city->id}}" @if($data->region_city_id == $city->id) selected @endif>{{$city->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input name="slug"   type="text" value="{{$data->slug}}" class="form-control" id="slug" placeholder="Unesite slug">
    </div>
    <br>
    <div class="checkbox">
        <label><input name="home" type="checkbox" @if ($data->home == 1) checked @endif value="1">Naslovna strana</label>
    </div>
    <div class="checkbox">
        <label><input name="active" type="checkbox" @if($data->active == 1) checked @endif value="1">Active</label>
    </div>
    <input class="btn btn-success pull-right" type="submit" value="SUBMIT">

    </form>
    <br><br>
@endsection