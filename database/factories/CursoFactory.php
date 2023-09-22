<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition():array
    {
        return [
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
        ];
    }
}

