<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Opinion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opinion', function (Blueprint $table) {
            $table->increments('opinion_id');
            $table->integer('opinion_rank')->nullable();
            $table->text('opinion_comment')->nullable();
            $table->timestamps();
            $table->unsignedInteger('fk_comic')->nullable()->onDelete('cascade');

            $table->foreign('fk_comic')->references('comic_id')->on('comic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opinion');
    }
}
