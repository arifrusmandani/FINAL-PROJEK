<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReputationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reputations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('like_dislike_pertanyaan_id');
            $table->unsignedBigInteger('like_dislike_jawaban_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('like_dislike_pertanyaan_id')->references('id')->on('like_dislike_pertanyaan');
            $table->foreign('like_dislike_jawaban_id')->references('id')->on('like_dislike_jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reputations');
    }
}
