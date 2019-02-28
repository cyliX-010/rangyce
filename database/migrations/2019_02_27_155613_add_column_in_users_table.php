<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $blue){
            $blue->text('education')->after('mobile_number')->nullable();
            $blue->text('experience')->after('education')->nullable();
            $blue->text('awards_recognition')->after('experience')->nullable();
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
            $blue->dropColumn('education');
            $blue->dropColumn('experience');
            $blue->dropColumn('awards_recognition');
        });    
    }
}
