@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <a href="/vehicles/{{$vehicle->id}}/" class="btn btn-sm btn-default">Go Back</a>
        Edit Vehicle
      </div>
      <div class="panel-body">
            {!! Form::open(['action' => ['VehiclesController@update', $vehicle->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    {{Form::label('year', 'Year')}}
                    {{Form::number('year', $vehicle->year, ['class' => 'form-control', 'placeholder' => 'Year'])}}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {{Form::label('make', 'Make')}}
                    {{Form::text('make', $vehicle->make, ['class' => 'form-control', 'placeholder' => 'Make'])}}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {{Form::label('model', 'Model')}}
                    {{Form::text('model', $vehicle->model, ['class' => 'form-control', 'placeholder' => 'Model'])}}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    {{Form::label('vin', 'Vin')}}
                    {{Form::text('vin', $vehicle->vin, ['class' => 'form-control', 'placeholder' => 'Vin'])}}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    {{Form::label('miles', 'Miles')}}
                    {{Form::number('miles', $vehicle->miles, ['class' => 'form-control', 'placeholder' => 'Miles'])}}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    {{Form::label('stock', 'Stock Number')}}
                    {{Form::text('stock', $vehicle->stock, ['class' => 'form-control', 'placeholder' => 'Stock'])}}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    {{Form::label('drive', 'Drive Train')}}
                    <!-- {{Form::text('drive', $vehicle->drive, ['class' => 'form-control', 'placeholder' => 'Drive'])}} -->
                    {{ Form::select('drive', [
                                              $vehicle->drive => $vehicle->drive,
                                              'FWD' => 'FWD',
                                              'RWD' => 'RWD',
                                              '4WD' => '4WD'
                                            ], '',
                                            ['class' => 'form-control']) }}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    {{Form::label('engine', 'Engine')}}
                    {{Form::text('engine', $vehicle->engine, ['class' => 'form-control', 'placeholder' => 'Engine'])}}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    {{Form::label('transmission', 'Transmission')}}
                    <!-- {{Form::text('transmission', $vehicle->transmission, ['class' => 'form-control', 'placeholder' => 'Transmission'])}} -->
                    {{ Form::select('transmission', [
                                                      $vehicle->transmission => $vehicle->transmission,
                                                      'Automatic' => 'Automatic',
                                                      'Manual' => 'Manual',
                                                      'Other' => 'Other'
                                                    ],
                                                    '',
                                                    ['class' => 'form-control']) }}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {{Form::label('exterior', 'Exterior Color')}}
                    <!-- {{Form::text('exterior', $vehicle->exterior, ['class' => 'form-control', 'placeholder' => 'Exterior'])}} -->
                    {{ Form::select('exterior', [
                                                  $vehicle->exterior => $vehicle->exterior,
                                                  'black' => 'black',
                                                  'blue' => 'blue',
                                                  'brown' => 'brown',
                                                  'green' => 'green',
                                                  'grey' => 'grey',
                                                  'orange' => 'orange',
                                                  'purple' => 'purple',
                                                  'red' => 'red',
                                                  'silver' => 'silver',
                                                  'white' => 'white',
                                                  'yellow' => 'yellow',
                                                  'custom' => 'custom'
                                                ], '', ['class' => 'form-control']) }}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {{Form::label('interior', 'Interior Color')}}
                    <!-- {{Form::text('interior', $vehicle->interior, ['class' => 'form-control', 'placeholder' => 'Interior'])}} -->
                    {{ Form::select('interior', [
                                                  $vehicle->interior => $vehicle->interior,
                                                  'black' => 'black',
                                                  'blue' => 'blue',
                                                  'brown' => 'brown',
                                                  'green' => 'green',
                                                  'grey' => 'grey',
                                                  'orange' => 'orange',
                                                  'purple' => 'purple',
                                                  'red' => 'red',
                                                  'silver' => 'silver',
                                                  'white' => 'white',
                                                  'yellow' => 'yellow',
                                                  'custom' => 'custom'
                                                ], '', ['class' => 'form-control']) }}
                  </div>
                </div>
              </div>

              <div class="form-group">
                {{Form::label('body', 'Personal Comments (optional)')}}
                {{Form::textarea('body', $vehicle->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
              </div>

              <div class="col-md-12 text-center">
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
              </div>

            {!! Form::close() !!}

      </div>
    </div>
  </div>
</div>
@endsection
