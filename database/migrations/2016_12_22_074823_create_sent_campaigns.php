<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSentCampaigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sent_campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps('date_sent');
            $table->integer('user_id')->unsigned();
            $table->integer('mailing_list_id')->unsigned();
            $table->integer('campaign_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mailing_list_id')->references('id')->on('mailing_lists');
            $table->foreign('campaign_id')->references('id')->on('campaigns');

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
