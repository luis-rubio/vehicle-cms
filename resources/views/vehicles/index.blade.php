@extends('layouts.app')

@section('content')

<div class="container-fluid container-padding">
  <div class="animated fadeIn">
  <h1>Our Vehicles</h1>
</div>

  @if(count($vehicles) > 0)
    <div class="row">

    @foreach($vehicles as $vehicle)
    <div class="col-md-4">
      <div class="panel panel-default animated fadeInUp">

        @if(count($photos) > 0)
          @foreach($photos as $photo)
              @if($vehicle->cover_image == $photo->id)
                <p>
                  <a href="/vehicles/{{$vehicle->id}}">
                    <img class="img-responsive" src="/storage/vehicle_images/{{$photo->filename}}" alt="">
                  </a>
                <p>
              @endif
          @endforeach
        @endif
        <div class="panel-body">
        <h3>
          <a href="/vehicles/{{$vehicle->id}}">
            {{$vehicle->year}} {{$vehicle->make}} {{$vehicle->model}}
          </a>
        </h3>

        <small>
          {{$vehicle->engine}}
        </small>
        </div>
      </div>
      </div>

    @endforeach

</div>
    {{$vehicles->links()}}
  @else
    <p>No posts found</p>
  @endif

</div>
@endsection
