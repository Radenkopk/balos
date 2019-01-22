@extends('layouts.app')
@section('content')
    <a class="text-secondary" href="/">pocetna</a>

    <span class="text-secondary ml-3"> | {{$city->title}} </span>
    <div class="line"></div>
    <h2>{{$city->title}}</h2>
    <div>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-12">
                <ul  class="lista p-0">
                    <li class="proba list-group-item-dark"><strong>Apartmani</strong></li>
                    <li class="list-group-item-dark"><strong>Opis regije</strong></li>
                </ul>
            </div>

            <div class="col-lg-9 col-sm-12">
                {{--<div class="apartmani">--}}
                    <div class="row shadow  bg-light">
                        <div class="col-4 p-0">
                            <div class="height-img">
                                <a href="#">
                                    <img src="images/asprovalta/apartmani.jpg" class="img-fluid h-100 d-inline-block" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 p-3">
                            <h3>Apartmani Litsa - Asprovalta</h3>
                            <p class="text-muted">Asprovalta apartmani 2018</p>
                            <hr>
                            <p>Apartmani Litsa se nalaze u lepo uređenom vrtu u Asprovalti,
                                na samo 100 metara od peščane plaže
                            </p>
                            <div class="b-with float-right">
                                <a href="#" class="btn btn-card">Detaljnije</a>
                            </div>
                        </div>
                    </div>
                {{--</div>--}}
            </div>
        </div>
    </div>

@endsection
