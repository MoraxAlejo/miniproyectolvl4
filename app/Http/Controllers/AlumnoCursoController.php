<?php

namespace App\Http\Controllers;

use App\Models\AlumnoCurso;
use Illuminate\Http\Request;

class AlumnoCursoController extends Controller
{
    public function index()
    {
        $alcu = new AlumnoCurso();
        return $alcu->all();
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $alcu = new AlumnoCurso();
        $alcu->alumno_id = $request->alumno_id;
        $alcu->curso_id = $request->curso_id;
        $alcu->save();
        return $alcu;
    }

    public function show($id)
    {
        $alcu = new AlumnoCurso();
        return $alcu->find($id);
    }

    public function edit($id, Request $request)
    {
        $alcu = AlumnoCurso::find($id);
        $alcu->alumno_id = $request->alumno_id;
        $alcu->curso_id = $request->curso_id;
        $alcu->save();
        return $alcu;
    }


    public function destroy($id)
    {
        $alcu = AlumnoCurso::find($id);
        $alcu->delete();
        return $alcu->all();
    }
}
