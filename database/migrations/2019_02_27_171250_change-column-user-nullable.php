<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnUserNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $blue){
            $blue->text('birthdate')->nullable()->change();
            $blue->text('state')->nullable()->change();
            $blue->text('city')->nullable()->change();
            $blue->text('street')->nullable()->change();
            $blue->text('zip_code')->nullable()->change();
            $blue->text('mobile_number')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
