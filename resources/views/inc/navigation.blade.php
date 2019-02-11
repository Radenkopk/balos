<nav class="navbar navbar-expand-lg   nav-color sticky-top">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="fas fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav ">
      <li class="nav-item px-4">
        <a class="nav-link" href="/">NASLOVNA</a>
      </li>
      <li class="nav-item px-4">
        <a class="nav-link" href="/last-minute">LAST MINUTE LETO 2019</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
          GRCKA LETOVANJE <i class="fa fa-angle-down" ></i>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">GRCKA APARTMANI LETOVANJE <i class="fa fa-angle-right"></i></a>
            <ul class="dropdown-menu">
              @foreach($menuData as $menu)
              <li><a class="dropdown-item text-uppercase" href="/single-region/{{$menu->slug}}/apartmans">{{$menu->title}}</a></li>
              @endforeach
            </ul>
          </li>

          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">GRCKA HOTELI LETOVANJE <i class="fa fa-angle-right"></i></a>


            <ul class="dropdown-menu">
              @foreach($menuData as $menu)
                <li><a class="dropdown-item text-uppercase" href="/single-region/{{$menu->slug}}/hotels">{{$menu->title}}</a></li>
              @endforeach
            </ul>
          </li>
        </ul>
      </li>
      <li class="nav-item px-4">
        <a class="nav-link" href="/blog">BLOG</a>
      </li>
      <li class="nav-item px-4">
        <a class="nav-link" href="/contact">KONTAKT</a>
      </li>


    </ul>
    </div>
  </div>
</nav>
