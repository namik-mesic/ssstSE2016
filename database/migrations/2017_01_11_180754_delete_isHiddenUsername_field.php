<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteIsHiddenUsernameField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * The username should not be set to private
         * so we don't need this field - Dalila*/

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('isUsernameHidden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('isUsernameHidden')->nullable();
        });
    }
}
