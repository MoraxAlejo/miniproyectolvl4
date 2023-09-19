<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo_electronico')->unique();
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('direccion');
            $table->string('telefono');
            $table->date('fecha_inscripcion');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}

