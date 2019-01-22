@extends('layouts.app')

@section('content')
<a class="text-secondary" href="/">pocetna</a>
<span class="text-secondary ml-3"> | neki apartman</span>
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
    <h1 class="gallery ">{{$apartman->title}}</h1>
    <div class="gallery ">tekst</div>
    <!-- GALLERY -->
    <div class="gallery ">
      <div class="row ">
        <div class="col-lg-3 col-sm-6">
          <div class="pic-with mb-3">
            <a href="/images/panda.jpg" data-lightbox="myGallery" data-title="opis za sliku">
              <img src="/images/panda.jpg" class="img-thumbnail ">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="pic-with mb-3">
            <a href="/images/panda.jpg" data-lightbox="myGallery" data-title="opis za sliku">
              <img src="/images/panda.jpg" class="img-thumbnail ">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="pic-with mb-3">
            <a href="/images/panda.jpg" data-lightbox="myGallery" data-title="opis za sliku">
              <img src="/images/panda.jpg" class="img-thumbnail ">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="pic-with mb-3">
            <a href="/images/panda.jpg" data-lightbox="myGallery" data-title="opis za sliku">
              <img src="/images/panda.jpg" class="img-thumbnail ">
            </a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="pic-with mb-3">
            <a href="/images/panda.jpg" data-lightbox="myGallery" data-title="opis za sliku">
              <img src="/images/panda.jpg" class="img-thumbnail ">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="pic-with mb-3">
            <a href="/images/panda.jpg" data-lightbox="myGallery" data-title="opis za sliku">
              <img src="/images/panda.jpg" class="img-thumbnail ">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="pic-with mb-3">
            <a href="/images/panda.jpg" data-lightbox="myGallery" data-title="opis za sliku">
              <img src="/images/panda.jpg" class="img-thumbnail ">
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="pic-with mb-3">
            <a href="/images/panda.jpg" data-lightbox="myGallery" data-title="opis za sliku">
              <img src="/images/panda.jpg" class="img-thumbnail ">
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- DESCRIPTION 2 -->
    <div class="gallery ">tekst</div>
    <!-- GOOGLE MAP -->
    <div  class="map d-none"></div>
    <!-- video -->

    <div class="video d-none">
      {{-- {!!$apartman->video!!} --}}

       {{--<iframe width="100%" height="500" src="{!!  $apartman->video !!}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}
    </div>
    <!-- program putovanja -->
    <div class="travel-program bg-light d-none">
      <h2>PROGRAM PUTOVANJA</h2>
      <div class="line mb-5"></div>
      <h4>AUTOBUSKI PREVOZ</h4>
      <p>
      <hr>
        1.dan - Polazak iz Beograda u poslepodnevnim časovima
        sa parkinga preko puta Buvlje pijace na Novom Beogradu,
        ugao ulica Jurija Gagarina i Antifašističke Borbe. Noćna
        vožnja sa usputnim pauzama radi ulaska putnika i kraćih odmora.
        Prelazak granice sa BJR Makedonijom. Vožnja do graničnog prelaza
        sa Grčkom (Evzoni) bez zadržavanja.
      </p>
      <p>
        2.dan - Ulazak u Grčku (vreme se pomera za +1 sat). Dolazak
        u letovališta je predviđen oko 12:00 časova (osim u slučaju više sile).
        Smeštaj u odabranim smeštajnim kapacitetima je od 14:00 časova.
        Slobodno vreme. Noćenje.
      </p>
      <p>
        3-11./16./21... dan - Boravak u odabranom
        apartmanu/studiju ili hotelu. Slobodno vreme.
        Napuštanje smeštajnih objekata poslednjeg dana boravka do 9:00 časova.
        Slobodno vreme. U večernjim časovima polazak prema Srbiji. Noćna vožnja
        sa usputnim zadržavanjima na graničnim prelazima i mestima za odmor.
        Dolazak na mesto polaska u
        ranim jutaranjim časovima (osim u slučaju više sile).
      </p>

      <h4>SOPSTVENI PREVOZ</h4>
      <hr>
      <p>
        1.dan - dolazak u apartman/studio. Smeštaj posle 14:00 časova
        (postoji mogućnost ranijeg ulaska) u određeni tip smeštaja
        prema uplaćenoj rezervaciji.
      </p>

      <p>
        2.dan - pretposlednji dan - boravak na bazi uplaćenih usluga. Slobodno vreme.
        Poslednji dan - napuštanje apartmana/studija do 09:00 časova.
      </p>
    </div>

    <!-- uslovi placanja -->
    <div class="payment bg-light d-none">
      <h1>Uslovi plaćanja</h1>
      <div class="line mb-5"></div>
      <ul class="ml-4">
        <li><strong class="position-li">30% prilikom prijavljivanja, ostatak najkasnije 15 dana pre datuma polaska na put.</strong></li>
        <li><strong class="position-li">Čekovima građana</strong></li>
        <li><strong class="position-li">Sve cene su izražene u evrima, a plaćanje se vrši u
          dinarskoj protivvrednosti po prodajnom kursu poslovne banke na dan uplate</strong></li>
      </ul>
    </div>
    <!-- cenovnik -->
    <div class="price d-none bg-light">
      <h1 class="mb-4">FIRST MINUTE POPUSTI:</h1>
      <div class="line mb-5"></div>
      <h5 class="mb-3"><strong>10% popusta</strong> na smeštaj za uplate u celosti prilikom rezervacije</h5>
      <h6><strong>CENOVNIK 2018. <br> CENOVNIK 10 NOĆENJA</strong></h6>
      <hr>
      <img class="img-fluid" src="images/Thalia.png" alt="">
      <p><strong>Cene sa zvezdicom (*) u prvoj i poslednjoj smeni
        označavaju paket aranžman (smeštaj+prevoz po osobi) i nemaju popust.</strong></p>
        <hr>
        <h5>POPUSTI ZA DECU:</h5>
        <ul>
          <li>Dva deteta do 10 godina starosti mogu koristiti jedan ležaj.</li>
          <li>Dete 0-3 godine može u studiju/apartmanu da boravi bez sopstvenog ležaja.</li>
        </ul>
        <hr>
        <h5>ARANŽMAN OBUHVATA:</h5>
        <ul>
          <li>Smeštaj u odabranoj vili na bazi najma apartmana za odabrani broj noćenja.</li>
          <li>Servis predstavnika agencije.</li>
          <li>Troškove organizacije.</li>
        </ul>
        <hr>
        <h5>ARANŽMAN NE OBUHVATA:</h5>
        <ul>
          <li>Autobuski prevoz.</li>
          <li>Međunarodno zdravstveno putno osiguranje.</li>
          <li>Održavanje higijene u apartmanima za vreme boravka.</li>
          <li>Fakultativne izlete.</li>
          <li>Ostale troškove.</li>
        </ul>

    </div>


  </div>
</div>


@endsection
