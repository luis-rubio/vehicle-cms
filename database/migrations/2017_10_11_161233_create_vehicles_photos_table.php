<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('vehicles_photos', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('vehicle_id')->unsigned();
             $table->foreign('vehicle_id')->references('id')->on('vehicles');
             $table->string('filename');
             $table->timestamps();
         });
     }

     public function down()
     {
         Schema::drop('vehicles_photos');
     }
}
