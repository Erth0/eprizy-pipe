<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrizeWinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prize_winners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prize_winner_id');
            $table->unsignedBigInteger('prize_id')->nullable();
            $table->foreign('prize_id')->references('id')->on('prizes');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('prize_winners');
    }
}