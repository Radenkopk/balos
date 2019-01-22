@extends('admin.layouts.app')
@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/blog">Blog</a></li>
            <li class="breadcrumb-item"><a href="/admin/blog/{{$blog_id}}/destination">Destinacije</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dodajte novu destinaciju</li>
        </ol>
    </nav>

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger ">
                <strong>{{$error}}</strong>
            </div>
        @endforeach
    @endif

    <form class="input-admin" action="/admin/blog/{{$blog_id}}/destination" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">NASLOV</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Unesite naslov">
        </div>
        <div class="form-group">
            <label for="picture">Ubacite sliku</label>
            <input name="image" type="file" class="form-control-file" id="picture" aria-describedby="fileHelp">
        </div>
        <div class="form-group">
            <label for="article-ckeditor">Tekst</label>
            <textarea name="description" class="form-control" id="article-ckeditor" rows="3"></textarea>
        </div>
        <div class="checkbox">
            <label><input name="active" type="checkbox" value="1">Aktivno</label>
        </div>
        <button class="btn btn-success pull-right" type="submit">SUBMIT</button>
    </form>
@endsection
