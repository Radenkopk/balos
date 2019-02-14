@extends('admin.layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/apartmans">Apartmani</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dodajte novi apartman</li>
        </ol>
    </nav>

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger ">
                <strong>{{$error}}</strong>
            </div>
        @endforeach
    @endif

    <form class="input-admin" action="/admin/apartmans" method="post" enctype = "multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Naslov</label>
            <input name="title"  type="text" class="form-control" id="title" placeholder="Unesite naslov">
        </div>
        <div class="form-group">
            <label for="subtitle">Podnaslov</label>
            <input name="subtitle"  type="text" class="form-control" id="subtitle" placeholder="Unesite podnaslov">
        </div>

        <div class="form-group">
            {{Form::file('image')}}
        </div>

        <div class="form-group">
            <label for="article-ckeditor">Tekst-1</label>
            <textarea name="description1" class="form-control" id="article-ckeditor" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="article-ckeditor">Tekst-2</label>
            <textarea name="description2" class="form-control" id="article-ckeditor-1" rows="3"></textarea>
        </div>
        <h1>lokacija</h1>
        <div class="form-group">
            <label for="video">Unesite URL</label>
            <input name="video" type="text" class="form-control" id="video" placeholder="Unesite url">
        </div>
        <div class="form-group">
            <label for="article-ckeditor">Program putovanja</label>
            <textarea name="travel_program" class="form-control" id="article-ckeditor-2" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="article-ckeditor">Uslovi placanja</label>
            <textarea name="payment" class="form-control" id="article-ckeditor-3" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="article-ckeditor">Cenovnik</label>
            <textarea name="pricelist" class="form-control" id="article-ckeditor-4" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="city">Izaberite Grad</label>
            <select class="form-control" name="region_city_id" id="city">
                <option>Izaberite grad</option>
                @foreach($cityData as $city)
                <option value="{{$city->id}}">{{$city->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input name="slug"   type="text"  class="form-control" id="slug" placeholder="Unesite slug">
        </div>
        <br>
        <div class="checkbox">
            <label><input name="home" type="checkbox" value="1">Naslovna strana</label>
        </div>
        <div class="checkbox">
            <label><input name="active" type="checkbox" value="1">Aktivno</label>
        </div>
        <input class="btn btn-success pull-right" type="submit" value="SUBMIT">

    </form>
    <br><br>
@endsection