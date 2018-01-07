@guest
@else
<nav class="navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
        </div>

        <div class="collapse navbar-collapse" id="app-admin-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-nav-admin navbar-right">
                <!-- Authentication Links -->


                    <li><a href="/home">Dashboard</a></li>
                    <li><a href="/vehicles/create">Add Vehicle</a></li>
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                 </form>
                               </li>

                        </ul>
                    </li>

            </ul>
        </div>
    </div>
</nav>
@endguest


  <nav class="navbar navbar-default">
      <div class="container">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                   2090<strong><span style="color:red;">/</span></strong>Auto
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  &nbsp;
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                      <li><a href="/vehicles">Vehicles</a></li>
                      <li><a href="/#location">Location</a></li>
                      <li><a href="/#contact-us">Contact Us</a></li>
              </ul>
          </div>
      </div>
  </nav>
