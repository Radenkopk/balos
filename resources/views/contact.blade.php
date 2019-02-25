@extends('layouts.app')
@section('content')
  <div class="container">


    <h1>kontakt</h1>
    <div class="map-kontakt mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.0369807804777!2d20.46607931594983!3d44.80043497909864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a700baaa97179%3A0xe90fce53d489c353!2sBalos+Travel!5e0!3m2!1ssr!2srs!4v1528898887165" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger ">
                <strong>{{$error}}</strong>
            </div>
        @endforeach
    @endif
    @if(Session::get('errorMessage'))
        <div class="alert alert-danger ">
            <strong>{{Session::get('errorMessage')}}</strong>
        </div>
    @endif

    @if(Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <div class="form-kontakt mt-5">
        <h2>Posaljite nam poruku</h2>
        <div class="line mb-3"></div>
        {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Vaše ime')}}
            {{Form::text('name', '' ,['class' => 'form-control input-k', 'id' => 'name'] )}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Vaša email adresa')}}
            {{Form::text('email', '' ,['class' => 'form-control input-k', 'id' => 'email'] )}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Vaša poruka')}}
            {{Form::textarea('message', '' ,['class' => 'form-control', 'id' => 'message'] )}}
        </div>
        <div class="form-group">
            <label for="pitanje">Koliko je <span class="broj-a">0</span> + <span class="broj-b">0</span>?</label>
            <input class="form-control input-k" id="pitanje" name="pitanje" type="text" value="">

        </div>
        <input type="hidden" name="broj_1" id="broj_1" value="">
        <input type="hidden" name="broj_2" id="broj_2" value="">
        {{form::submit('POSALJI',['class' => 'btn btn-kontakt my-4'])}}
        {!! Form::close() !!}
    </div>



    <div class="tel-adress">
        <h2>Telefon i adresa</h2>
        <div class="line mb-3"></div>
        <h5>☎011/24 59 918 ☎061/65 10 532</h5>
        <div>
            <i class="fa fa-phone"></i>
            <a href="mailto:office@balostravel-letovanje.rs">office@balostravel-letovanje.rs</a>
        </div>
    </div>
  </div>

@endsection
