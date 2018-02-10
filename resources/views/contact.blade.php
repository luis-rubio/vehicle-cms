@extends('layouts.app')

@section('content')
<div class="container animated fadeIn">
  <h2>Contact</h2>
  <div class="panel panel-default">
    <div class="panel-body">
       <p><h3>{{ config('app.name') }}</h3></p>
       <p><i class="fa fa-phone-square"></i> {{ config('app.company_number') }}</p>
       <p><i class="fa fa-envelope-square"></i> {{ config('app.company_email') }}</p>
       <p><i class="fa fa-map-marker"></i> {{ config('app.company_location') }}</p>
    </div>
  </div>
</div>
@endsection
