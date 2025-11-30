@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
<div class="container py-5" style="max-width:450px;">
    <h2 class="fw-bold mb-4 text-center" style="color:#ff4da6;">Iniciar sesión</h2>

    <form method="POST" action="/login">
        @csrf

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-rosa w-100 mb-3">Entrar</button>

        <p class="text-center">¿No tienes cuenta?
            <a href="{{ route('register') }}" style="color:#ff4da6;">Registrarte</a>
        </p>
    </form>
</div>
@endsection
