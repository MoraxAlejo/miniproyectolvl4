<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlumnoCurso extends Model
{
    protected $table = 'alumno_curso'; 

    protected $fillable = [
        'alumno_id',
        'curso_id',
    ];

    public $timestamps = true;
}
