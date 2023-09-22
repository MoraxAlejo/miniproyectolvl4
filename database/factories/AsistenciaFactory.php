<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Asistencia;

class AsistenciaFactory extends Factory
{
    protected $model = Asistencia::class;

    public function definition()
    {
        return [
            'alumno_id' => $this->faker->numberBetween(1, 10), // Ajusta el rango según la cantidad de alumnos
            'curso_id' => $this->faker->numberBetween(1, 5), // Ajusta el rango según la cantidad de cursos
            'fecha' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['A', 'T', 'F']), // Asistió temprano (A), Asistió tarde (T), Faltó (F)
           
        ];
    }
}

