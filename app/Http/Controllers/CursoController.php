<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        // Validación de datos (puedes personalizar las reglas de validación)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'cupo_maximo' => 'required|integer',
        ]);

        // Crear un nuevo curso en la base de datos
        Curso::create($request->all());

        return redirect()->route('cursos.index')->with('success', 'Curso creado exitosamente');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        // Validación de datos (puedes personalizar las reglas de validación)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'cupo_maximo' => 'required|integer',
        ]);

        // Actualizar el curso en la base de datos
        $curso->update($request->all());

        return redirect()->route('cursos.index')->with('success', 'Curso actualizado exitosamente');
    }

    public function destroy(Curso $curso)
    {
        // Eliminar el curso de la base de datos
        $curso->delete();

        return redirect()->route('cursos.index')->with('success', 'Curso eliminado exitosamente');
    }
}
