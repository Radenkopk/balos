@extends('admin.layouts.app')
@section('content')

    <br><br>
    <form action="/admin/slider" method="post" class="input-admin">
        {{ csrf_field() }}
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        <div class="checkbox">
            <label><input name="active" type="checkbox" value="1"> Active</label>

        </div>
        <input class="btn btn-success" type="submit" value="SUBMIT">

    </form>
@endsection