<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsSent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns_sent', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps('date_sent');
            $table->integer('user_id')->unsigned();
            $table->integer('mailing_list_id')->unsigned();
            $table->integer('campaigns_sent_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mailing_list_id')->references('id')->on('mailing_list');
            $table->foreign('campaigns_sent_id')->references('id')->on('campaigns');

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
