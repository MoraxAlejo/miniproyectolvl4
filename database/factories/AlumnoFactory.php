<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;

class AlumnoFactory extends Factory
{
    protected $model = Alumno::class;

    public function definition():array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'correo_electronico' => $this->faker->unique()->safeEmail(),
            'asistio' => $this->faker->randomElement(['A', 'T' ,'F']),
            
        ];
    }
}

