<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo_electronico')->unique();
            $table->string('especialidad');
            

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
