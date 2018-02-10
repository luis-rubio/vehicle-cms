<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="icon" type="image/png" href="/storage/icon.png">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">


    <style>
      html, body {
        height: 100%;
        background-color: #f1f1f1;
        color: #22313F;
      }

      .container-fluid {
        padding: 0;
        height: 100%;
      }

      .container-padding {
        padding: 10px;
      }

      #app {
        height: 100%;
      }

      #map {
        height: 100%;
      }
      .pagination > li > a,
.pagination > li > span {
  color: #d14444;
  background-color: #ffffff;
  border: 1px solid #dddddd;
}

.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: #b73a3a;
  background-color: #eeeeee;
  border-color: #dddddd;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  color: #ffffff;
  background-color: #d14444;
  border-color: #d14444;
}

.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  background-color: #ffffff;
  border-color: #dddddd;
}

.btn {
  border-radius: 0;
}
.btn.btn-danger {
  background: #d14444;
}

.jumbotron {
  background-position: 0% 25%;
  background-size: cover;
  background-repeat: no-repeat;
  height: 90%;
  opacity: 0.8;
  color: #fff;
  border-radius: 0;
}
    </style>

</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container-fluid container-margin">
          @include('inc.messages')
          @yield('content')
        </div>
    </div>



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
          var location = {lat: 21.279856, lng: -157.8365683};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: location,
            draggable: false
          });
          var marker = new google.maps.Marker({
            position: location,
            map: map
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWHuFptMhUPuzjkF96kEkccdDwy2gB0zI&callback=initMap">
      </script>
</body>
</html>
