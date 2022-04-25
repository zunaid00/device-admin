<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
                $table->id();
                $table->string('device_name');
                $table->string('device_model');
                $table->string('serial_number');
                $table->string('front_image')->nullable();
                $table->string('back_image')->nullable();
                $table->text('comments');
                $table->string('sim_card');
                $table->string('charger');
                $table->string('handfree');
                $table->string('box');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
