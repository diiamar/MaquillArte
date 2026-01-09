@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')

<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card shadow p-4" style="width: 420px; border-radius:20px;">

        <h2 class="text-center fw-bold mb-3" style="color:#ff4da6;">Iniciar sesión</h2>

        <form method="POST" action="{{ route('login.process') }}">
            @csrf

            <div class="mb-3">
                <label class="fw-semibold">Correo electrónico</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="fw-semibold">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-rosa w-100 mt-2">Entrar</button>

            <p class="text-center mt-3">
                ¿No tienes cuenta?
                <a href="{{ route('register') }}" style="color:#ff4da6;">Registrarte</a>
            </p>
        </form>

    </div>
</div>

@endsection
