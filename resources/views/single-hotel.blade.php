@extends('layouts.app')
@section('content')
    <a class="text-secondary" href="/">pocetna</a>
    <span class="text-secondary ml-3"> | {{$hotel->title}}</span>
    <div class="line"></div>
    <div class="row mt-4">
        <div class="col-lg-3 col-sm-12">
            <ul  class="lista p-0">
                <li class="proba list-group-item-dark"><strong>Foto galerija i opis</strong></li>
                <li class="list-group-item-dark"><strong><i class="fas fa-thumbtack"></i> Lokacija</strong></li>
                <li class="list-group-item-dark"><strong>Video</strong></li>
                <li class="list-group-item-dark"><strong>Program putovanja</strong></li>
                <li class="list-group-item-dark"><strong>Uslovi plaćanja</strong></li>
                <li class="list-group-item-dark"><strong>cenovnik</strong></li>
            </ul>
        </div>
        <div class="col-lg-9 col-sm-12">
            <!-- DESCRIPTION -->
            <h1 class="gallery ">{{$hotel->title}}</h1>
            <div class="gallery ">{!! $hotel->description1 !!}</div>
            <!-- GALLERY -->
            <div class="gallery ">
                <div class="row ">
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna13.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna13.jpg" class="img-thumbnail ">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna2.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna2.jpg"  class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna3.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna3.jpg" class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna4.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna4.jpg" class="img-thumbnail" data-title="opis za sliku">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna5.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna5.jpg"  class="img-thumbnail ">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna6.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna6.jpg"  class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna7.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna7.jpg" alt="..." class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna8.jpeg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna8.jpeg" alt="..." class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna9.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna9.jpg"  class="img-thumbnail ">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna10.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna10.jpg"  class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna11.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna11.jpg"  class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna4.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna12.jpg"  class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna5.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna5.jpg"  class="img-thumbnail ">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna6.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna6.jpg" alt="..." class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna7.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna7.jpg" alt="..." class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna8.jpeg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna8.jpeg" alt="..." class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna5.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna5.jpg" class="img-thumbnail ">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna6.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna6.jpg" alt="..." class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna7.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna7.jpg" alt="..." class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna8.jpeg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna8.jpeg"  class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna5.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna5.jpg" class="img-thumbnail ">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna6.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna6.jpg" class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna7.jpg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna7.jpg"  class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pic-with mb-3">
                            <a href="images/nea-vrasna/nea-vrasna8.jpeg" data-lightbox="myGallery" data-title="opis za sliku">
                                <img src="images/nea-vrasna/nea-vrasna8.jpeg" alt="..." class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DESCRIPTION 2 -->
            <div class="gallery ">{!! $hotel->description2 !!}</div>
            <!-- GOOGLE MAP -->
            <div  class="map d-none"></div>
            <!-- video -->

            <div class="video d-none">

                 <iframe width="100%" height="500" src="{{$hotel->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <!-- program putovanja -->
            <div class="travel-program bg-light d-none">
            {!!  $hotel->travel_program !!}
            </div>

            <!-- uslovi placanja -->
            <div class="payment bg-light d-none">
            {!! $hotel->payment !!}
            </div>
            <!-- cenovnik -->
            <div class="price d-none bg-light">
                {!! $hotel->pricelist !!}
            </div>


        </div>
    </div>
@endsection
