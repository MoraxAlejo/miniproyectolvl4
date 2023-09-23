<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $curso = new Curso();
        return $curso->all();
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->save();
        return $curso;
    }

    public function show($id)
    {
        $curso = new Curso();
        return $curso->find($id);
    }

    public function edit($id, Request $request)
    {
        $curso = Curso::find($id);
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->save();
        return $curso;
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'cupo_maximo' => 'required|integer',
        ]);

        $curso->update($request->all());

        return redirect()->route('cursos.index')->with('success', 'Curso actualizado exitosamente');
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return $curso->all();
    }
}
