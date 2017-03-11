<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiketVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket_votes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('tiket_id')->unsigned();
            $table->foreign('tiket_id')->references('id')->on('tikets');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tiket_votes');
    }
}
