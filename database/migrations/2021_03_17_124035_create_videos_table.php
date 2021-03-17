<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('link_video');
            $table->string('descricao');
            $table->unsignedBigInteger('materia_id');
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->unsignedBigInteger('professor_id');
            $table->foreign('professor_id')->references('id')->on('professors');
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
        Schema::dropIfExists('videos');
    }
}
