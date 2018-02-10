@extends('layouts.app')

@section('content')
<div class="container-fluid container-padding">
  <div class="panel panel-default animated fadeInUp">
    <!-- <div class="panel-heading">
      <a href="/vehicles" class="btn btn-sm btn-default">Go Back</a>
    </div> -->
    <div class="panel-body">

  <div class="row">
    <div class="col-md-8">
      @if(count($photos) > 0)
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://2090auto.com/storage/vehicle_images/dpcNExsv01j0febcCNIqVW24rNpoFyuHorEBA86J.jpeg">
            </div>
            @foreach($photos as $photo)
              @if ($loop->first)
                <div class="item active">
                  <img src="/storage/vehicle_images/{{$photo->filename}}">
                </div>
              @else
                <div class="item">
                  <img src="/storage/vehicle_images/{{$photo->filename}}">
                </div>
              @endif
            @endforeach
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      @else
        <p>No images found</p>
      @endif
    </div>
    <div class="col-md-4">
      <h1>{{$vehicle->year}} {{$vehicle->make}} {{$vehicle->model}}</h1>
      <div>
        <table class="table">
          <tr>
            <td width="50%">{{$vehicle->miles}} Miles</td>
            <td width="50%">{{$vehicle->engine}}</td>
          </tr>
          <tr>
            <td>{{$vehicle->transmission}}</td>
            <td>{{$vehicle->drive}}</td>
          </tr>
          <tr>
            <td>VIN #: {{$vehicle->vin}}</td>
            <td>Stock #: {{$vehicle->stock}}</td>
          </tr>
          <tr>
            <td>Exterior: {{$vehicle->exterior}}</td>
            <td>Interior: {{$vehicle->interior}}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

</div>
</div>



  @if(!Auth::guest())
    <div class="panel panel-primary">
      <div class="panel-heading">
        Admin Panel
      </div>
    <div class="panel-body">
      <a href="/vehicles/{{$vehicle->id}}/edit" class="btn btn-primary">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        Edit Vehicle
      </a>
      <a href="/images/{{$vehicle->id}}/" class="btn btn-primary">
        <i class="fa fa-picture-o" aria-hidden="true"></i>
        Edit/Add Images
      </a>

      <div class="pull-right">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteConfirmation">
          Delete
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="deleteConfirmation" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Are you sure you want to delete?</h4>
            </div>
            <div class="modal-footer">
              <p>
                {!!Form::open(['action' => ['VehiclesController@destroy', $vehicle->id], 'method' => 'POST'])!!}
                  {{Form::hidden('_method', 'DELETE')}}
                  {{Form::submit('Delete', ['class' => 'btn btn-block btn-danger'])}}
                {!!Form::close()!!}
              </p>
              <p>
                <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Cancel</button>
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
</div>
  @endif
@endsection
