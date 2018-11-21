<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComicUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_users', function (Blueprint $table) {
            $table->unsignedInteger('fk_comic');
            $table->unsignedInteger('fk_users');
            $table->timestamps();

            $table->foreign('fk_comic')->references('comic_id')->on('comic')->onDelete('cascade');
            $table->foreign('fk_users')->references('users_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_users');
    }
}
