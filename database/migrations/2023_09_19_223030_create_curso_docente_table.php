<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoDocenteTable extends Migration
{
    public function up()
    {
        Schema::create('curso_docente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('curso_id');
            $table->timestamps();

            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('curso_docente');
    }
}
