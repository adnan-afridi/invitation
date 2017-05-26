<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignPublishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up() {
        Schema::create('campaign_publish', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('campaign_id')->nullable()->unsigned();
            $table->foreign('campaign_id')->references('id')->on('campaign')->onDelete('cascade');
            
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('campaign_publish');
    }
}
