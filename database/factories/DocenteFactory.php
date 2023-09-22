<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Docente;

class DocenteFactory extends Factory
{
    protected $model = Docente::class;

    public function definition():array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'correo_electronico' => $this->faker->unique()->safeEmail(),
            'especialidad' => $this->faker->word(),
            
        ];
    }
}
