<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = new Alumno();
        return $alumnos->all();

    }

    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        $alumnos = new Alumno();
        $alumnos->nombre = $request->nombre;
        $alumnos->apellido = $request->apellido;
        $alumnos->correo_electronico = $request->correo_electronico;
        $alumnos->asistio = $request->asistio;
        $alumnos->save();
        return $alumnos;
    }

    public function show($id)
    {
        $alumnos = new Alumno();
        return $alumnos->find($id);

    }

    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo_electronico' => 'required|string|email|unique:alumnos,correo_electronico,' . $alumno->id,
        ]);

       
        $alumno->update($request->all());

        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado exitosamente');
    }

    public function destroy(Alumno $alumno)
    {
       
        $alumno->delete();

        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado exitosamente');
    }
}
