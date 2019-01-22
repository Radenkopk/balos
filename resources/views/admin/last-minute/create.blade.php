@extends('admin.layouts.app')
@section('content')

@section('content')
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger ">
                <strong>{{$error}}</strong>
            </div>
        @endforeach
    @endif

    <form class="input-admin" action="/admin/last-minute" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="article-ckeditor">unesite tekst</label>
            <textarea class="form-control" name="description" id="article-ckeditor" rows="3"></textarea>
        </div>
        <input type="submit" value="SUBMIT" class="btn btn-primary">
    </form>

@endsection