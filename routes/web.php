<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| RUTAS PÚBLICAS
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sobre_mi', function () {
    return view('sobre_mi');
})->name('sobre_mi');

/*
|--------------------------------------------------------------------------
| CURSOS (público: ver listado y detalle)
|--------------------------------------------------------------------------
*/

Route::get('/cursos', [CursoController::class, 'index'])->name('cursos');
Route::get('/curso/{slug}', [CursoController::class, 'show'])->name('curso.show');
Route::get('/buscar-cursos', [CursoController::class, 'buscar'])->name('cursos.buscar');

/*
|--------------------------------------------------------------------------
| SERVICIOS (público: ver listado y detalle)
|--------------------------------------------------------------------------
*/

Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
Route::get('/servicio/{slug}', [ServicioController::class, 'show'])->name('servicio.show');

/*
|--------------------------------------------------------------------------
| RESERVAS (protegido: reservar solo si está logueado)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Página "Reservas" del navbar: muestra el calendario de lo seleccionado
    Route::get('/reservas', [ReservaController::class, 'index'])->name('reservas');

    // Cuando el usuario pulsa "Reservar" en un curso/servicio:
    // guardamos la selección y redirigimos a /reservas
    Route::get('/reservar/{tipo}/{id}', [ReservaController::class, 'select'])
        ->name('reservas.select');

    // Confirmar reserva
    Route::post('/reservar/confirmar', [ReservaController::class, 'store'])
        ->name('reservas.store');
});

/*
|--------------------------------------------------------------------------
| AUTENTICACIÓN MANUAL
|--------------------------------------------------------------------------
*/

// LOGIN
Route::get('/login', [AuthController::class, 'loginForm'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

// REGISTRO
Route::get('/register', [AuthController::class, 'registerForm'])
    ->name('register')
    ->middleware('guest');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.process');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');
/*
|--------------------------------------------------------------------------
| ÁREA PRIVADA DEL USUARIO
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');

    Route::get('/mis-compras', function () {
        return view('mis-compras');
    })->name('mis-compras');
});
