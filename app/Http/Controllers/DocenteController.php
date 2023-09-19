<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    public function create()
    {
        return view('docentes.create');
    }

    public function store(Request $request)
    {
        // Validación de datos (puedes personalizar las reglas de validación)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo_electronico' => 'required|string|email|unique:docentes',
            'especialidad' => 'required|string',
        ]);

        // Crear un nuevo docente en la base de datos
        Docente::create($request->all());

        return redirect()->route('docentes.index')->with('success', 'Docente creado exitosamente');
    }

    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docente'));
    }

    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    public function update(Request $request, Docente $docente)
    {
        // Validación de datos (puedes personalizar las reglas de validación)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo_electronico' => 'required|string|email|unique:docentes,correo_electronico,' . $docente->id,
            'especialidad' => 'required|string',
        ]);

        // Actualizar el docente en la base de datos
        $docente->update($request->all());

        return redirect()->route('docentes.index')->with('success', 'Docente actualizado exitosamente');
    }

    public function destroy(Docente $docente)
    {
        // Eliminar el docente de la base de datos
        $docente->delete();

        return redirect()->route('docentes.index')->with('success', 'Docente eliminado exitosamente');
    }
}

