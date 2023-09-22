<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Docente;

class DocentesTableSeeder extends Seeder
{
    public function run():void
    {
        // Crear 5 registros de prueba para Docentes
        Docente::factory()
            ->count(5) // Puedes ajustar la cantidad de registros de prueba
            ->create();
    }
}
