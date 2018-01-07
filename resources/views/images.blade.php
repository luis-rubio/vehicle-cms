@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <a href="/vehicles/{{$vehicle->id}}/" class="btn btn-sm btn-default">Go Back</a>
        Edit Images
      </div>
      <div class="panel-body">
        <form action="/images/{{$vehicle->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <p>
              Vehicles photos (can attach more than one):
            </p>
            <p>
              <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}"/>
            </p>
            <p>
              <input type="file" class="form-control-file" name="photos[]" multiple />
            </p>
            <p>
              <input type="submit" class="btn btn-primary" value="Upload" />
            </p>
        </form>
      </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          Images
        </div>
        <div class="panel-body">
          @if(count($photos) > 0)
            @foreach($photos as $photo)

            <div class="col-md-4">
              <div class="thumbnail">
                <img src="/storage/vehicle_images/{{$photo->filename}}" style="width:100%">
                <div class="caption">
                  <div class="row">
                    <div class="col-md-6">
                      {!!Form::open(['action' => ['UploadController@uploadUpdate', $vehicle->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::hidden('cover_image', $photo->id)}}
                        {{Form::submit('Make Main', ['class' => 'btn btn-sm btn-block btn-default'])}}
                      {!!Form::close()!!}
                    </div>
                    <div class="col-md-6">
                      {!!Form::open(['action' => ['UploadController@uploadDestroy', $photo->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-sm btn-block btn-danger'])}}
                      {!!Form::close()!!}
                    </div>
                  </div>
                </div>
              </div>
             </div>
            @endforeach
          @else
            <p>No posts found</p>
          @endif

        </div>
        </div>

    </div>





@endsection
