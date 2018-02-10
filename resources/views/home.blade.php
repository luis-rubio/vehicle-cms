@extends('layouts.app')

@section('content')
<div class="container animated fadeIn">
          <div>
            <h1>Admin Panel</h1>
          </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                  Dashboard

                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($vehicles) > 0)
                    <table class="table">
                      <tr>
                        <th>Vehicles</th>
                        <th></th>
                        <th>            <span class="pull-right">
                                      <a href="/vehicles/create" class="btn btn-success">Add new</a>
                                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default">Logout</a>
                                    </span></th>
                      </tr>
                      @foreach($vehicles as $vehicle)
                        <tr>
                          <td>{{$vehicle->year}} {{$vehicle->make}} {{$vehicle->model}}</td>
                          <td>
                            <span class="pull-right">
                              <a class="btn btn-default btn-sm" href="/vehicles/{{$vehicle->id}}/edit">Edit Vehicle</a>
                            </span>
                          </td>
                        </tr>
                      @endforeach
                    </table>
                    @else
                      <p>You have <strong>0</strong> vehicles posted.</p>
                    @endif
                </div>
            </div>
</div>
@endsection
