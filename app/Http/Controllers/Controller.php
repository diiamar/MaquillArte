<?php

namespace App\Http\Controllers;

use App\Models\Curso;

class CursoController extends Controller
{
    public function show($slug)
    {
        $curso = Curso::where('slug', $slug)->firstOrFail();

        return view('cursos.show', compact('curso'));
    }
}
