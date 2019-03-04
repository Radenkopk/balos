<div class="sidebar" data-background-color="white" data-active-color="danger">
  <div class="sidebar-wrapper">
      <div class="logo">
          <a href="#" class="simple-text">
              BALOS TRAVEL
          </a>
      </div>

      <ul class="nav">
          <li class="{{ Request::is('admin') ? "active" : ""  }}">
              <a href="/admin">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li class="{{ Request::is('admin/regions') ? "active" : ""  }}">
              <a href="/admin/regions">
                  <i class="fas fa-globe"></i>
                  <p>Regioni</p>
              </a>
          </li>
          <li class="{{ Request::is('admin/regions-city') ? "active" : ""  }}">
              <a href="/admin/regions-city">
                  <i class="fas fa-globe"></i>
                  <p>Grad</p>
              </a>
          </li>
          <li class="{{ Request::is('admin/apartmans') ? "active" : ""  }}">
              <a href="/admin/apartmans">
                  <i class="fas fa-building"></i>
                  <p>Apartmani</p>
              </a>
          </li>
          <li class="{{ Request::is('admin/hotels') ? "active" : ""  }}">
              <a href="/admin/hotels">
                  <i class="fas fa-building"></i>
                  <p>Hoteli</p>
              </a>
          </li>
          <li class="{{ Request::is('admin/blog') ? "active" : ""  }}">
              <a href="/admin/blog">
                  <i class="fab fa-blogger-b"></i>
                  <p>Blog</p>
              </a>
          </li>
          <li class="{{ Request::is('admin/last-minute') ? "active" : ""  }}">
              <a href="/admin/last-minute">
                  <i class="far fa-clock"></i>
                  <p>Last Minute</p>
              </a>
          </li>
          <li class="{{ Request::is('admin/slider') ? "active" : ""  }}">
              <a href="/admin/slider">
                  <i class="far fa-images"></i>
                  <p>Slider</p>
              </a>
          </li>
          <li>
              <a href="#">
                  <i class="ti-pencil-alt2"></i>
                  <p>Icons</p>
              </a>
          </li>
          <li>
              <a href="#">
                  <i class="ti-map"></i>
                  <p>Maps</p>
              </a>
          </li>
          <li>
              <a href="#">
                  <i class="ti-bell"></i>
                  <p>Notifications</p>
              </a>
          </li>
          <li class="active-pro">
              <a href="#">
                  <i class="ti-export"></i>
                  <p>Upgrade to PRO</p>
              </a>
          </li>
      </ul>
  </div>
</div>
