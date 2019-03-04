@section('footer')
<footer class="bg-light p-5 mt-5 col-xs-12">
  <div class="row">
    <div class="col-lg-3 col-sm-6 col-xs-12 ">
      <h3 class="text-muted mb-4">Kontinentalna Grčka</h3>
      <ul>
        @foreach($continental as $cont)
        <li><a href="/single-region/{{$cont->slug}}">{{$cont->title}}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12 ">
      <h3 class="text-muted mb-4">Grčka ostrva</h3>
      <ul>
@foreach ($islands as $island)
    <li><a href="/single-region/{{$island->slug}}">{{$island->title}}</a></li>
@endforeach

      </ul>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12 ">
      <h3 class="text-muted mb-4">Društvene mreže</h3>
      @include('inc.social')
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12 ">
      <h3 class="text-muted mb-4">Radno vreme</h3>
      <h5>⏰Ponedeljak-petak <br>
        10.00h - 18.00h <br>
        Subota <br>
        10.00h-14.00h</h5>
        <h3 class="text-muted">Kontakt</h3>
        <h5>📞011/ 24 59 918</h5>
        <h5>📞061/65 10 532</h5>
        <h5>Skype: Balos Travel</h5>
        <h5>Kneginje Zorke 16A, Beograd</h5>
        <h5><i class="fas fa-envelope"></i><a href="#"> office@balostravel-letovanje.rs</a></h5>
        <h5><i class="fas fa-envelope"></i><a href="#"> balostravel.beograd@gmail.com</a></h5>
        <img class="img-fluid my-5" src="/images/triglav-osiguranje.jpg" alt="">
        <img class="img-fluid" src="/images/banka.png" alt="">
    </div>
</div>

<div class="footer">
  <hr>
  <p class="text-muted my-4 ml-5 d-inline">© Balos travel 2018.</p>
  <span class="text-secondary float-right"><a class="text-secondary" href="/">pocetna</a> |
    <a class="text-secondary" href="/admin" > Configure</a>
  </span>

</div>
<hr>
</footer>
