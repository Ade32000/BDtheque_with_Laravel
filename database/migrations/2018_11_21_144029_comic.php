<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic', function (Blueprint $table) {
            $table->increments('comic_id');
            $table->char('comic_title');
            $table->integer('comic_total_collection')->nullable();
            $table->integer('comic_num_collection')->nullable();
            $table->integer('comic_favorite');
            $table->timestamps();
            $table->unsignedInteger('fk_category');
            $table->unsignedInteger('fk_author');
            $table->unsignedInteger('fk_editor');

            $table->foreign('fk_category')->references('category_id')->on('category')->onDelete('cascade');
            $table->foreign('fk_author')->references('author_id')->on('author')->onDelete('cascade');
            $table->foreign('fk_editor')->references('editor_id')->on('editor')->onDelete('cascade');
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic');
    }
}
