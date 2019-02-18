<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecurityServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id');
            $table->integer('reporter_id');
            $table->integer('type')->comment('1 - Accidents, 2 - Crime, 3 - FireAlarm, 4 - Trouble, 5 - Drug, 6 - Abuse');
            $table->text('location');
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
        Schema::dropIfExists('security_services');
    }
}
