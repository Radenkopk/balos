

  @if (session('sucsess'))
  <div id="alert_message" class="alert alert-success">
    {{session('sucsess')}}
  </div>
  @endif

  @if (session('error'))
  <div id="alert_message" class="alert alert-danger">
    {{session('error')}}
  </div>
  @endif
