@extends('layouts.app')

@section('title', 'Panel de la maquilladora')

@section('content')

<div class="container py-5">
    <h1 class="fw-bold mb-4">Panel de Administración</h1>

    <div class="row g-4">

        <div class="col-md-4">
            <a href="{{ route('panel.disponibilidad') }}" class="btn btn-rosa w-100 p-4 fs-5 shadow">
                Disponibilidad semanal
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('panel.dias') }}" class="btn btn-rosa w-100 p-4 fs-5 shadow">
                Bloquear días completos
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('panel.horas') }}" class="btn btn-rosa w-100 p-4 fs-5 shadow">
                Bloquear horas específicas
            </a>
        </div>

    </div>
</div>

@endsection
