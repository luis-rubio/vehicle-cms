@extends('layouts.app')

@section('content')
<div class="container-fluid container-padding animated fadeIn">

<div class="jumbotron text-center" style="background-image: url('{{ config('app.company_banner') }}');">
    <h1>
      {{ config('app.name') }}
    </h1>
    <h2>
      <i class="fa fa-phone-square" aria-hidden="true"></i>
      {{ config('app.company_number') }}
    </h2>
    <br>
    <p>
      <a class="btn btn-danger btn-lg" href="/vehicles">View Vehicles</a>
    </p>
</div>

</div>

@endsection
