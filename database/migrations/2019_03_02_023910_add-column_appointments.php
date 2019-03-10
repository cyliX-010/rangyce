<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function(Blueprint $blue){
            $blue->string('firstname')->after('user_id');
            $blue->string('lastname')->after('firstname');
            $blue->string('city')->after('lastname');
            $blue->string('street')->after('city');
            $blue->string('zip_code')->after('street');
            $blue->string('mobile_number')->after('zip_code');
            $blue->string('birthdate')->after('mobile_number');
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
        Schema::table('appointments', function(Blueprint $blue){
            $blue->dropColumn('firstname');
            $blue->dropColumn('lastname');
            $blue->dropColumn('city');
            $blue->dropColumn('street');
            $blue->dropColumn('zip_code');
            $blue->dropColumn('mobile_number');
            $blue->dropColumn('birthdate');
            $blue->dropColumn('gender');
        });
    }
}
