<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComicPublic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_public', function (Blueprint $table) {
            $table->unsignedInteger('fk_comic');
            $table->unsignedInteger('fk_public');
            $table->timestamps();

            $table->foreign('fk_comic')->references('comic_id')->on('comic')->onDelete('cascade');
            $table->foreign('fk_public')->references('public_id')->on('publicType')->ondelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_public');
    }
}
