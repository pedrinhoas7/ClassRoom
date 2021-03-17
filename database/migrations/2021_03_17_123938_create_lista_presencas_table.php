<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaPresencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_presencas', function (Blueprint $table) {
            $table->id();
            $table->string('data');
            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('alunos');
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
        Schema::dropIfExists('lista_presencas');
    }
}
