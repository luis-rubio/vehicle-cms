<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVehiclesDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('vehicles', function($table){
        // Year - Make - Model
        $table->integer('year');
        $table->string('make');
        $table->string('model');
        // identity
        $table->string('vin');
        $table->string('stock');
        // details
        $table->string('drive');
        $table->string('engine');
        $table->string('transmission');
        $table->string('exterior');
        $table->string('interior');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      $table->dropColumn('year');
      $table->dropColumn('make');
      $table->dropColumn('model');
      // identity
      $table->dropColumn('vin');
      $table->dropColumn('stock');
      // details
      $table->dropColumn('drive');
      $table->dropColumn('engine');
      $table->dropColumn('transmission');
      $table->dropColumn('exterior');
      $table->dropColumn('interior');
    }
}
