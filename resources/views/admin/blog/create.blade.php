@extends('admin.layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/blog">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dodajte novi blog</li>
        </ol>
    </nav>
    <form class="input-admin" action="/admin/blog" method="post" enctype = "multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">NASLOV</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        <div class="form-group">
            <label for="article-ckeditor">TEKST</label>
            <textarea name="description" class="form-control" id="article-ckeditor" rows="3"></textarea>
        </div>
        <div class="checkbox">
            <label><input name="home" type="checkbox" value="1">Naslovna strana</label>
        </div>
        <div class="checkbox">
            <label><input name="active" type="checkbox" value="1">Aktivno</label>
        </div>
        <button class="btn btn-success pull-right" type="submit">SUBMIT</button>
    </form>
@endsection