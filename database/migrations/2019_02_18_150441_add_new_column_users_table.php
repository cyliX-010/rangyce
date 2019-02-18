<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $blue){
            $blue->text('first_name')->after('id');
            $blue->text('last_name')->after('first_name');
            $blue->integer('user_type')->after('name')->comment('1 admin 2 normaluser');
            $blue->text('birthdate')->after('user_type');
            $blue->text('state')->after('birthdate');
            $blue->text('city')->after('state');
            $blue->text('street')->after('city');
            $blue->text('zip_code')->after('street');
            $blue->text('mobile_number')->after('zip_code');
            $blue->text('file_path')->after('mobile_number');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $blue){
            $blue->dropColumn('first_name');
            $blue->dropColumn('last_name');
            $blue->dropColumn('user_type');
            $blue->dropColumn('birthdate');
            $blue->dropColumn('state');
            $blue->dropColumn('city');
            $blue->dropColumn('street');
            $blue->dropColumn('zip_code');
            $blue->dropColumn('mobile_number');
            $blue->dropColumn('file_path');
        });
    }
}
