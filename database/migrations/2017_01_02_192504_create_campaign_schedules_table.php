<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')-> onDelete('cascade')->onUpdate('cascade');
            $table->string('status');
            $table->integer('mailing_list_id')->unsigned();
            $table->foreign('mailing_list_id')->references('id')->on('mailing_lists')-> onDelete('cascade')->onUpdate('cascade');
            $table->integer('mail_id')->unsigned();
            $table->foreign('mail_id')->references('id')->on('mails')-> onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

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
    }
}
