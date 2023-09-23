<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docente = new Docente();
        return $docente->all();
    }

    public function create()
    {
        return view('docentes.create');
    }

    public function store(Request $request)
    {
        $docente = new docente();
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->correo_electronico = $request->correo_electronico;
        $docente->save();
        return $docente;
    }

    public function show($id)
    {
        $docente = new Docente();
        return $docente->find($id);
    }

    public function edit($id, Request $request)
    {
        $docente = Docente::find($id);
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->correo_electronico = $request->correo_electronico;
        $docente->save();
        return $docente;
    }

    public function update(Request $request, Docente $docente)
    {
        
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo_electronico' => 'required|string|email|unique:docentes,correo_electronico,' . $docente->id,
            'especialidad' => 'required|string',
        ]);

        
        $docente->update($request->all());

        return redirect()->route('docentes.index')->with('success', 'Docente actualizado exitosamente');
    }

    public function destroy($id)
    {
        $docente = Docente::find($id);
        $docente->delete();
        return $docente->all();
    }
}

