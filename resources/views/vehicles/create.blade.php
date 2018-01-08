@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-primary">
      <div class="panel-heading">Add Vehicle</div>
      <div class="panel-body">
            {!! Form::open(['action' => 'VehiclesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    {{Form::label('year', 'Year')}}
                    {{Form::number('year', '', ['class' => 'form-control', 'placeholder' => 'Year'])}}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {{Form::label('make', 'Make')}}
                    {{Form::text('make', '', ['class' => 'form-control', 'placeholder' => 'Make'])}}
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    {{Form::label('model', 'Model')}}
                    {{Form::text('model', '', ['class' => 'form-control', 'placeholder' => 'Model'])}}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    {{Form::label('vin', 'Vin')}}
                    {{Form::text('vin', '', ['class' => 'form-control', 'placeholder' => 'Vin'])}}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    {{Form::label('miles', 'Miles')}}
                    {{Form::number('miles', '', ['class' => 'form-control', 'placeholder' => 'Miles'])}}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    {{Form::label('stock', 'Stock Number')}}
                    {{Form::text('stock', '', ['class' => 'form-control', 'placeholder' => 'Stock'])}}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    {{Form::label('drive', 'Drive Train')}}
                    {{ Form::select('drive', [
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
                    {{Form::text('engine', '', ['class' => 'form-control', 'placeholder' => 'Engine'])}}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    {{Form::label('transmission', 'Transmission')}}
                    <!-- {{Form::text('transmission', '', ['class' => 'form-control', 'placeholder' => 'Transmission'])}} -->
                    {{ Form::select('transmission', [
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
                    <!-- {{Form::text('exterior', '', ['class' => 'form-control', 'placeholder' => 'Exterior'])}} -->
                    {{ Form::select('exterior', [
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
                    <!-- {{Form::text('interior', '', ['class' => 'form-control', 'placeholder' => 'Interior'])}} -->
                    {{ Form::select('interior', [
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
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
              </div>

              <div class="col-md-12 text-center">
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
              </div>

            {!! Form::close() !!}

      </div>
    </div>
  </div>
</div>
      <br>
      <hr>
@endsection
