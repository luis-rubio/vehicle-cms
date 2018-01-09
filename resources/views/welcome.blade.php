@extends('layouts.app')

@section('content')

<div class="jumbotron text-center" style="background-image: url('{{ config('app.company_banner') }}');">
  <h1>
    {{ config('app.name') }}
  </h1>
  <h2>
    <i class="fa fa-phone-square" aria-hidden="true"></i>
    {{ config('app.company_number') }}
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
        <p>{{ config('app.company_location') }}</p>
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
            {{ config('app.company_number') }}
          </p>
          <p>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            {{ config('app.company_email') }}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
