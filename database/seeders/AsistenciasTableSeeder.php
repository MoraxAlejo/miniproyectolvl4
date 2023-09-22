<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asistencia;

class AsistenciasTableSeeder extends Seeder
{
    public function run()
    {
        // Crear 100 registros de prueba para Asistencias
        Asistencia::factory()
            ->count(100) // Puedes ajustar la cantidad de registros de prueba
            ->create();
    }
}
