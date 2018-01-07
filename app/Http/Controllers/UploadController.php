<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\VehiclesPhoto;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function uploadForm($id)
  {
      $vehicle = Vehicle::find($id);
      $photos = VehiclesPhoto::orderBy('id', 'desc')->where('vehicle_id', $id)->get();
      return view('images')
          ->with('vehicle', $vehicle)
          ->with('photos', $photos);
  }

  public function uploadSubmit(Request $request)
  {
      $this->validate($request, [
        'vehicle_id' => 'required',
      ]);

      $vehicle = $request->input('vehicle_id');
      foreach ($request->photos as $photo) {
          $path = $photo->store('public/vehicle_images');
          $filename = str_replace("public/vehicle_images/", "", $path);
          $image = str_replace("public/", "storage/", $path);
          $location = public_path('storage/vehicle_images/' . $filename);
          Image::make($image)->resize(640, 427)->save($location);

          VehiclesPhoto::create([
              // 'vehicle_id' => $request->input('vehicle_id'),
              'vehicle_id' => $request->input('vehicle_id'),
              'filename' => $filename
          ]);
      }
      // return 'Upload successful!';
      return redirect('/images/'.$vehicle)->with('success', 'Image(s) successfully added.');
  }
  public function uploadDestroy($id)
  {
      $photo = VehiclesPhoto::find($id);

      Storage::delete('public/vehicle_images/'.$photo->filename);

      $photo->delete();
      return redirect('/images/'.$photo->vehicle_id)->with('success', 'Image Removed.');

  }
  public function uploadUpdate(Request $request, $id)
  {
    $this->validate($request, [
      'cover_image' => 'required'
    ]);

    // Update Vehicle
    $vehicle = Vehicle::find($id);
    $vehicle->cover_image = $request->input('cover_image');
    $vehicle->save();

    return redirect('/vehicles')->with('success', 'Cover image successfully updated.');
  }
}
