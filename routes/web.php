<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre_mi', function () {
    return view('sobre_mi');
})->name('sobre_mi');

use App\Models\Curso;

Route::get('/cursos', function () {
    $cursos = Curso::all();
    return view('cursos.index', compact('cursos'));
})->name('cursos');

Route::get('/curso/{slug}', function ($slug) {
    $curso = Curso::where('slug', $slug)->firstOrFail();
    return view('cursos.show', compact('curso'));
})->name('curso.show');

Route::get('/cursos/buscar', function () {
    $buscar = request('q');

    return Curso::where('titulo', 'LIKE', "%$buscar%")->get();
})->name('cursos.buscar');



Route::view('/servicios', 'servicios');
Route::view('/reservas', 'reservas');
Route::view('/contacto', 'contacto');
