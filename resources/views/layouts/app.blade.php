<html>
  <head>
    <meta charset="utf-8">
    @include('inc.stylesheets')
    <title>Balos travel</title>
  </head>
  <body>

    @include('inc.header')
    @include('inc.navigation')
    @include('inc.modal')
    @if(Request::is('/'))
      @include('inc.slider')
    @endif
    <div class="container-fluid background p-0">
      <div class="container">
        @include('inc.social')
        <div class="phone"  data-toggle="modal" data-target="#myModal"><i class="fa fa-phone"></i></div>
        <button  type="button" id="btn-top"><strong class="d-none	d-lg-inline-block">VRH STRANE</strong>
        <i class="fas fa-arrow-up d-lg-none d-sm-inline-block"></i></button>
        @yield('content')

      </div>
      @include('inc.footer')
    </div>
    @include('inc.scripts')

  </body>
</html>
