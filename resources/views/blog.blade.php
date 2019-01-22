@extends('layouts.app')
@section('content')
<a class="text-secondary" href="/">POCETNA</a>
<span class="text-secondary ml-3"> | BLOG</span>
<div class="line"></div>
@foreach ($blogData as $data)


<div class="blog-content bg-light my-5">
  <h1>{{$data->title}}</h1>
  <img class="img-fluid my-5" src="images/panda.jpg" alt="">
  <div class="text-justify">
    {!!$data->description!!}
  </div>

  <a class="btn btn-blog text-uppercase" href="/blog-destination/{{$data->slug}}" role="button"><strong>Više o ovome...</strong></a>
</div>
@endforeach

{{-- <div class="blog-content bg-light my-5">
  <h1>LEFKADA PLAŽE</h1>
  <img class="img-fluid my-5" src="images/blog/lefkada.jpg" alt="">
  <p>
    <strong>Egremni</strong> plaža Sinonim za rajsko letovanje u Grčkoj
    – na zapadnoj obali Lefkade, udaljena oko 30 kilometara
    od istoimenog grad. Ne samo da važi za najlepšu na teritoriji Grčke,
    već se često svrstava u red najlepših na celom svetu. Do plaže se
    stiže strmim stepenicama, kojih je, ako je verovati pojedinim izvorima, ukupno 350, a […]
  </p>
  <a class="btn btn-blog text-uppercase" href="#" role="button"><strong>Više o ovome...</strong></a>
</div>


<div class="blog-content bg-light my-5">
  <h1>KEFALONIJA</h1>
  <img class="img-fluid my-5" src="images/blog/kefalonija.jpg" alt="">
  <p>
    <strong>KEFALONIJA</strong> Najveće ostrvo Jonskog arhipelaga koje će Vas
    očarati već na prvi pogled – Kefalonija! Gde god da krenete opija vas
    miris ruzmarina, origana, timijana, žalfije, majčine dušice i nane.
    Užareno sunce se presijava na zidovima belih kuća i glatkom kamenu.
    U tom beskrajnom plavetnilu smestila se
    Kefalonija, najveće jonsko ostrvo sa 250km prelepih plaža, […]
  </p>
  <a class="btn btn-blog text-uppercase" href="#" role="button"><strong>Više o ovome...</strong></a>
</div>

<div class="blog-content bg-light my-5">
  <h1>PLAŽE U SIVOTI</h1>
  <img class="img-fluid my-5" src="images/blog/sivota.jpg" alt="">
  <p>
    <strong>GALIKOS MOLOS</strong> Počinjemo od gradske plaže Sivote, Galikos
    Molos. Ona je od luke (koja se smatra centrom Sivote), udaljena oko 150m.
    Put od luke vodi kroz uređenu stazu koja je obeležena i veoma lepo
    organizovana sa klupicama za odmor u hladovini.
    Ovaj predivan puteljak se završava plažom
    Galikos Molos. Prilično dugačna, sa užim pojasom ali […]
  </p>
  <a class="btn btn-blog text-uppercase" href="#" role="button"><strong>Više o ovome...</strong></a>
</div>

<div class="blog-content bg-light my-5">
  <h1>LETNJIKOVAC BOGOVA SA OLIMPA</h1>
  <img class="img-fluid my-5" src="images/blog/pilion.jpg" alt="">
  <p>
    <strong>PILION</strong> Pilion (rajsko poluostrvo) –
    planina koja najsažetije govori o lepoti  grčkog poluostrva kome je
    podarila ime. Proteže se duž poluostrva koje se u obliku udice naslanja na
    Egejsko more, na jugoistoku Tesalije, u centralnoj Grčkoj. Nadvijen iznad
    grada Volosa, Pilion spaja istoriju i legendu, daljinu i mir, prošlost i
    sadašnjost, ostavljajući na posetioce utisak […]
  </p>
  <a class="btn btn-blog text-uppercase" href="#" role="button"><strong>Više o ovome...</strong></a>
</div>

<div class="blog-content bg-light my-5">
  <h1>25 NAJLEPŠIH PLAŽA NA TASOSU</h1>
  <img class="img-fluid my-5" src="images/blog/tassos.jpg" alt="">
  <p>
    <strong>Tasos</strong> – plaže Limenas – gradska plaža Limenas ima malu
    ali veoma lepu i peskovitu plažu ušuškanu u prirodni hlad. Ona je od luke
    koja se smatra centrom Limenasa, udaljena oko 1.5 km.
    Plaža je idealna za malu decu, plićak je prilično dug kao na
    većini plaža na Tasosu, pa je tako idealna za sve […]
  </p>
  <a class="btn btn-blog text-uppercase" href="#" role="button"><strong>Više o ovome...</strong></a>
</div>

<div class="blog-content bg-light my-5">
  <h1>TRI SVETE PLANINE</h1>
  <img class="img-fluid my-5" src="images/blog/planina.jpg" alt="">
  <p>
    Svi idemo u Grčku  isključivo zbog mora. Znamo da je Egejsko i Jonsko more
    dar prirode, iako nije deo naše zemlje nekako nas je Bog ipak nagradio te
    nam je tako blizu. Pored sve lepote Grcki su „naši“ pa se na letovanju osećamo
    još komotnije i slobodnije. Ali, nije Grčka samo more. Mnogo toga se […]
  </p>
  <a class="btn btn-blog text-uppercase" href="#" role="button"><strong>Više o ovome...</strong></a>
</div>

<div class="blog-content bg-light my-5">
  <h1>TRI NEOBIČNA GRČKA OSTRVA</h1>
  <img class="img-fluid my-5" src="images/blog/ostrvo.jpg" alt="">
  <p>
    SANTORINI Santorini je sinonim za grčko ostrvo i do njega se može doći preko
    ogromnog kružnog zaliva, koji je davno bio prekriven ogromnim vlkanom.
    Oko 1650. godina p.n.e. iznenada je došlo do erupcije
    koja je bila toliko jaka i izbaciča 30 kubnih metara
    lave, tako da se vrh planine srušio, a iz potonulog kratera oforimio […]
  </p>
  <a class="btn btn-blog text-uppercase" href="#" role="button"><strong>Više o ovome...</strong></a>
</div> --}}
<div class="line mb-5"></div>



@endsection
