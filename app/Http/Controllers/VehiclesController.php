<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\VehiclesPhoto;
use App\Vehicle;

class VehiclesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::orderBy('id', 'desc')->paginate(9);
        $photos = VehiclesPhoto::orderBy('id', 'desc')->get();
        return view('vehicles.index')->with('vehicles', $vehicles)->with('photos', $photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'year' => 'required',
          'make' => 'required',
          'model' => 'required',
          'miles' => 'required',
          'vin' => 'required',
          'stock' => 'required',
          'drive' => 'required',
          'engine' => 'required',
          'transmission' => 'required',
          'exterior' => 'required',
          'interior' => 'required',
        ]);


        // Create Vehicle
        $vehicle = new Vehicle;
        $vehicle->body = $request->input('body');

        $vehicle->year = $request->input('year');
        $vehicle->make = $request->input('make');
        $vehicle->model = $request->input('model');
        $vehicle->miles = $request->input('miles');
        $vehicle->vin = $request->input('vin');
        $vehicle->stock = $request->input('stock');
        $vehicle->drive = $request->input('drive');
        $vehicle->engine = $request->input('engine');
        $vehicle->transmission = $request->input('transmission');
        $vehicle->exterior = $request->input('exterior');
        $vehicle->interior = $request->input('interior');

        $vehicle->user_id = auth()->user()->id;
        $vehicle->cover_image = 1;
        $vehicle->save();

        return redirect('/vehicles')->with('success', 'Vehicle successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::find($id);
        // Grab vehicle's images
        $photos = VehiclesPhoto::orderBy('id', 'desc')->where('vehicle_id', $id)->get();
        return view('vehicles.show')->with('vehicle', $vehicle)->with('photos', $photos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $vehicle = Vehicle::find($id);

      // Check for correct
      if(auth()->user()->id !==$vehicle->user_id) {
          return redirect('/vehicles')->with('error', 'Unauthorized Page');
      }

      return view('vehicles.edit')->with('vehicle', $vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'year' => 'required',
        'make' => 'required',
        'model' => 'required',
        'miles' => 'required',
        'vin' => 'required',
        'stock' => 'required',
        'drive' => 'required',
        'engine' => 'required',
        'transmission' => 'required',
        'exterior' => 'required',
        'interior' => 'required',
      ]);



      // Update Vehicle
      $vehicle = Vehicle::find($id);

      $vehicle->year = $request->input('year');
      $vehicle->make = $request->input('make');
      $vehicle->model = $request->input('model');
      $vehicle->miles = $request->input('miles');
      $vehicle->vin = $request->input('vin');
      $vehicle->stock = $request->input('stock');
      $vehicle->drive = $request->input('drive');
      $vehicle->engine = $request->input('engine');
      $vehicle->transmission = $request->input('transmission');
      $vehicle->exterior = $request->input('exterior');
      $vehicle->interior = $request->input('interior');
      $vehicle->body = $request->input('body');
      if($request->hasFile('cover_image')) {
        $vehicle->cover_image = $fileNameToStore;
      }
      $vehicle->save();

      return redirect('/vehicles')->with('success', 'Vehicle successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);

        // Check for correct
        if(auth()->user()->id !==$vehicle->user_id) {
            return redirect('/vehicles')->with('error', 'Unauthorized Page');
        }

        // Check for image
        if($vehicle->cover_image != 'noimage.jpg'){
          // delete image
          Storage::delete('public/cover_images/'.$vehicle->cover_image);
        }

        $vehicle->delete();
        return redirect('/vehicles')->with('success', 'Post Removed.');

    }
}
