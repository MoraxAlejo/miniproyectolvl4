<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnosTableSeeder extends Seeder
{
    public function run():void
    {
        Alumno::factory()
            ->count(10) 
            ->create();
    }
}

