<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursosTableSeeder extends Seeder
{
    public function run():void
    {
       
        Curso::factory()
            ->count(5) 
            ->create();
    }
}
