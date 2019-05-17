<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('bannedUntil');
            $table->enum('status', ['active', 'elapsed', 'deleted']);
            $table->boolean('verified');

            $table->bigInteger('player')->unsigned();
            $table->bigInteger('bannedBy')->unsigned();
            $table->bigInteger('game')->unsigned();
            $table->bigInteger('reason')->unsigned();

        });

        Schema::table('bans', function ($table) {
            $table->foreign('player')->references('id')->on('players');
            $table->foreign('bannedBy')->references('id')->on('users');
            $table->foreign('game')->references('id')->on('games');
            $table->foreign('reason')->references('id')->on('reasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bans');
    }
}
