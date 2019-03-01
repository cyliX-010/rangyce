<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id');
            $table->integer('user_id');
            $table->text('height');
            $table->text('weight');
            $table->text('bloodtype');
            $table->text('set_date');
            $table->text('set_time');
            $table->text('medical_notes');
            $table->timestamps();
        });

        Schema::table('users', function(Blueprint $blue){
            $blue->string('gender')->after('birthdate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');

        Schema::table('users', function(Blueprint $blue){
            $blue->dropColumn('gender');
        });
    }
}
