@extends('layouts.app')

@section('title', 'Crear Cuenta')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card shadow p-4 mt-5" style="width: 420px; border-radius:20px;">

        <h2 class="text-center fw-bold mb-3" style="color:#ff4da6;">Crear Cuenta</h2>

        @if ($errors->any())
            <div class="alert alert-danger small">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="c">
            @csrf

            <div class="mb-3">
                <label class="fw-semibold">Nombre completo</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="fw-semibold">Correo electrónico</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="fw-semibold">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="fw-semibold">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button class="btn btn-rosa w-100 mt-2">Registrarme</button>

            <p class="text-center mt-3">
                ¿Ya tienes cuenta?
                <a href="{{ route('login') }}" style="color:#ff4da6;">Inicia sesión</a>
            </p>
        </form>
    </div>
</div>

@endsection
