<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerThatDeletesInactiveUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER DeleteInactiveUsers AFTER INSERT ON users FOR EACH ROW
                BEGIN
                   DELETE ALL FROM users WHERE activated = NULL AND updated_at > date_add(created_at, INTERVAL 1 HOUR);
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `DeleteInactiveUsers`');
    }
}
