<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_stations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name_of_hospital');
            $table->text('state');
            $table->text('city');
            $table->text('street');
            $table->text('zip');
            $table->text('file_path');
            $table->integer('status');
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
        Schema::dropIfExists('hospital_stations');
    }
}
