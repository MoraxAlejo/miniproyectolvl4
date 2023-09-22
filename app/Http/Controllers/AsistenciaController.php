<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    // Método para registrar una asistencia nueva
    public function store(Request $request)
    {
        // Valida los datos enviados desde el formulario de registro de asistencia
        $request->validate([
            'alumno_id' => 'required|exists:alumnos,id',
            'curso_id' => 'required|exists:cursos,id',
            'fecha' => 'required|date',
            'estado' => 'required|in:A,T,F', // A = Asistió temprano, T = Asistió tarde, F = Faltó
        ]);

        // Crea un nuevo registro de asistencia en la tabla 'asistencias'
        Asistencia::create([
            'alumno_id' => $request->alumno_id,
            'curso_id' => $request->curso_id,
            'fecha' => $request->fecha,
            'estado' => $request->estado,
        ]);

        // Retorna una respuesta exitosa
        return response()->json(['message' => 'Asistencia registrada con éxito'], 201);
    }

    // Método para obtener la asistencia de un alumno en un curso específico
    public function show($alumno_id, $curso_id)
    {
        // Consulta la asistencia en la base de datos
        $asistencia = Asistencia::where('alumno_id', $alumno_id)
            ->where('curso_id', $curso_id)
            ->get();

        // Verifica si se encontraron registros de asistencia
        if ($asistencia->isEmpty()) {
            return response()->json(['message' => 'No se encontraron registros de asistencia para este alumno en este curso'], 404);
        }

        // Retorna los registros de asistencia en formato JSON
        return response()->json(['data' => $asistencia], 200);
    }
}
