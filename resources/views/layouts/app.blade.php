<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>2090 Autos</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="icon" type="image/png" href="/storage/icon.png">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('inc.adminbar')
        <center><h1 class="logo-title">2090 Auto</h1></center>
        @include('inc.navbar')
        <div class="container">
          @include('inc.messages')
          @yield('content')
        </div>
    </div>

<!-- footer -->
<div class="row footer">
  <div class="col-md-12">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <i class="fa fa-map-marker" aria-hidden="true"></i> 26364 FM 2090, Splendora, TX 77372
            </div>
            <div class="col-md-12">
              <i class="fa fa-phone" aria-hidden="true"></i> 281.689.6141
            </div>
            <div class="col-md-12">
              <i class="fa fa-envelope" aria-hidden="true"></i> contact@2090auto.com
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <p>
            <b>About Us</b>
          </p>
          <p>
            We are an autodealership location 30 miles north of Houston.
          </p>
        </div>
        <div class="col-md-4">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        function initMap() {
          var uluru = {lat: 30.233147, lng: -95.156077};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: uluru,
            draggable: false
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWHuFptMhUPuzjkF96kEkccdDwy2gB0zI&callback=initMap">
      </script>
</body>
</html>
