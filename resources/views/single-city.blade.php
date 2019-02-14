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
                <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="card shadow">
                      <a  href="/single-hotel/">
                        <img class="card-img-top" src="images/panda.jpg" alt="Card image">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="d-flex justify-content-center">
                          <a href="/single-hotel/" class="btn btn-card">Detaljnije</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="card shadow">
                      <a  href="/single-hotel/">
                        <img class="card-img-top" src="images/panda.jpg" alt="Card image">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="d-flex justify-content-center">
                          <a href="/single-hotel/" class="btn btn-card">Detaljnije</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="card shadow">
                      <a  href="/single-hotel/">
                        <img class="card-img-top" src="images/panda.jpg" alt="Card image">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="d-flex justify-content-center">
                          <a href="/single-hotel/" class="btn btn-card">Detaljnije</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mb-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="card shadow">
                      <a  href="/single-hotel/">
                        <img class="card-img-top" src="images/panda.jpg" alt="Card image">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="d-flex justify-content-center">
                          <a href="/single-hotel/" class="btn btn-card">Detaljnije</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection
