<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiclesPhoto extends Model
{
    protected $fillable = ['vehicle_id', 'filename'];

    public function vehicle()
    {
      return $this->belongsTo('App\Vehicle');
    }
}
