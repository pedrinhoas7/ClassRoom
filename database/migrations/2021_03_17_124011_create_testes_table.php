<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->string('nota');
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
        Schema::dropIfExists('testes');
    }
}
