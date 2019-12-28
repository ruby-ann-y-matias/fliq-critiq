<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlickGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flick_genre', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('flick_id')->unsigned();
            $table->integer('genre_id')->unsigned();
            $table->timestamps();

            $table->foreign('flick_id')
                ->references('id')
                ->on('flicks')
                ->onDelete('cascade');

            $table->foreign('genre_id')
                ->references('id')
                ->on('genres')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flick_genre');
    }
}
