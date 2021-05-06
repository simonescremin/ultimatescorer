<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('start_date');
            $table->integer('team1_score')->unsigned()->nullable();
            $table->integer('team1_sotg1')->unsigned()->nullable();
            $table->integer('team1_sotg2')->unsigned()->nullable();
            $table->integer('team1_sotg3')->unsigned()->nullable();
            $table->integer('team1_sotg4')->unsigned()->nullable();
            $table->integer('team1_sotg5')->unsigned()->nullable();
            $table->integer('team2_score')->unsigned()->nullable();
            $table->integer('team2_sotg1')->unsigned()->nullable();
            $table->integer('team2_sotg2')->unsigned()->nullable();
            $table->integer('team2_sotg3')->unsigned()->nullable();
            $table->integer('team2_sotg4')->unsigned()->nullable();
            $table->integer('team2_sotg5')->unsigned()->nullable();
            $table->foreignId('division_id')->constrained('divisions');
            $table->foreignId('team1_id')->constrained('registered_teams');
            $table->foreignId('team2_id')->constrained('registered_teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
}
