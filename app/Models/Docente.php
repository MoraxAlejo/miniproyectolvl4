<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'curso_docente', 'docente_id', 'curso_id');
    }
}
