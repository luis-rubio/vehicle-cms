@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
  <h1>
    2090 Auto
  </h1>
  <h2>
    <i class="fa fa-phone-square" aria-hidden="true"></i>
    281-689-6141
  </h2>
  <p>
    <a class="btn btn-danger btn-lg" href="/vehicles">View Our Vehicles</a>
  </p>
</div>
<section id="location">
  <div class="text-center">
    <div class="panel panel-default">
      <div class="panel-body">
        <h1 class="display-4">Our Location</h1>
        <p>26364 FM 2090, Splendora, TX 77372</p>
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>

<section id="contact-us">
  <div class="text-center">
    <div class="panel panel-default">
      <div class="panel-body">
        <h1 class="display-4">Contact Us</h1>
        <div class="contact">
          <p>
            <i class="fa fa-phone-square" aria-hidden="true"></i>
            281.689.6141
          </p>
          <p>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            contact@2090auto.com
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
