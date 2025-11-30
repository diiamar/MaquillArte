<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('titulo')->get();
        return view('cursos.index', compact('cursos'));
    }

    public function show($slug)
    {
        $curso = Curso::where('slug', $slug)->firstOrFail();
        return view('cursos.show', compact('curso'));
    }

    public function buscar(Request $request)
    {
        $query = $request->q;

        $cursos = Curso::where('titulo', 'LIKE', "%{$query}%")
                        ->orWhere('descripcion_corta', 'LIKE', "%{$query}%")
                        ->get();

        return response()->json($cursos);
    }
}
