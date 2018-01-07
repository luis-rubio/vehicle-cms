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
