<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::view('/servicios', 'servicios');
Route::view('/cursos', 'cursos');
Route::view('/reservas', 'reservas');
Route::view('/contacto', 'contacto');
