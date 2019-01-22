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

    {!! Form::model($data, ['route' => ['last-minute.update', $data->id], 'method' => 'PUT', 'class' => 'input-admin']) !!}
        {{ csrf_field() }}

        <div class="form-group">
            <label for="article-ckeditor">unesite tekst</label>
            <textarea class="form-control" name="description" id="article-ckeditor" rows="3">{!! $data->description !!}</textarea>
        </div>
        <input type="submit" value="SUBMIT" class="btn btn-primary">
    {!! Form::close() !!}

@endsection