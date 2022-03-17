<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MapApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_api', function (Blueprint $table) {
            $table->id();
            $table->string('deviceId');
            $table->string('economico');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('cap');
            $table->string('speed');
            $table->string('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('map_api');
    }
}
