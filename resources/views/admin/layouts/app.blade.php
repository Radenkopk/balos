<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    @include('admin.inc.stylesheets')
    <title>balos-admin</title>
  </head>
  <body>
    <div class="wrapper">

    @include('admin.inc.sidebar')
    <div class="main-panel">
      @include('admin.inc.navbar')
@include('admin.inc.alerts')
      @yield('content')

    </div>
    @include('admin.inc.footer')
    </div>
    @include('admin.inc.modal')
    @include('admin.inc.scripts')


  </body>
</html>
