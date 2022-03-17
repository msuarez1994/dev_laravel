<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pv extends Migration
{
    public function up()
    {
        Schema::connection('pgsql3')->create('pv', function (Blueprint $table) {
            $table->id();
            $table->string('motor');
            $table->string('transmision');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pv');
    }
}
