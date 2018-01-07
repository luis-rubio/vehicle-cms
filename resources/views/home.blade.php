@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($vehicles) > 0)
                    <table class="table">
                      <tr>
                        <th>Vehicle</th>
                        <th></th>
                        <th></th>
                      </tr>
                      @foreach($vehicles as $vehicle)
                        <tr>
                          <td>{{$vehicle->year}} {{$vehicle->make}} {{$vehicle->model}}</td>
                          <td><a class="btn btn-default btn-sm" href="/vehicles/{{$vehicle->id}}/edit">Edit Vehicle</a></td>
                        </tr>
                      @endforeach
                    </table>
                    @else
                      <p>You have <strong>0</strong> vehicles posted.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
