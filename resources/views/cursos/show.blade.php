@extends('layouts.app')

@section('title', $curso->titulo)

@section('content')

<!-- BANNER -->
<section class="py-5" style="background: #ffe4ec10;">
    <div class="container text-center">
        <h1 class="fw-bold display-5" style="font-family: 'Playfair Display', serif;">
            {{ $curso->titulo }}
        </h1>
        <p class="text-muted fs-5 mt-2">{{ $curso->descripcion_corta }}</p>
    </div>
</section>

<!-- CONTENIDO PRINCIPAL -->
<section class="py-5">
    <div class="container">

        <div class="row align-items-center g-5">

            <!-- IMAGEN -->
            <div class="col-lg-6">
                <img src="{{ asset('img/' . $curso->imagen) }}"
                     alt="{{ $curso->titulo }}"
                     class="img-fluid rounded-4 shadow"
                     style="width: 100%; max-height: 500px; object-fit: cover;">
            </div>

            <!-- INFORMACIÓN -->
            <div class="col-lg-6">

                <div class="p-4 rounded-4 shadow-sm" 
                     style="background:white; border-left: 5px solid var(--rosa);">

                    <h3 class="fw-bold mb-4" style="font-family: 'Playfair Display', serif;">
                        Información del curso
                    </h3>

                    <ul class="list-unstyled fs-5 mb-4" style="line-height: 1.7;">
                        @if($curso->duracion)
                        <li>
                            <i class="bi bi-clock-history me-2" style="color: var(--rosa);"></i>
                            <strong>Duración:</strong> {{ $curso->duracion }}
                        </li>
                        @endif

                        <li>
                            <i class="bi bi-cash-coin me-2" style="color: var(--rosa);"></i>
                            <strong>Precio:</strong>
                            @if($curso->precio)
                                {{ number_format($curso->precio, 2) }} €
                            @else
                                Consultar
                            @endif
                        </li>
                    </ul>

                    <p class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">
                        {!! nl2br(e($curso->descripcion_larga)) !!}
                    </p>

                    <a href="/#reservas" class="btn btn-rosa btn-lg mt-4 w-100 py-3">
                        Reservar este curso
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- SECCIÓN EXTRA (OPCIONAL) -->
<section class="py-5">
    <div class="container">

        <h2 class="fw-bold text-center mb-4" style="font-family: 'Playfair Display', serif;">
            ¿Qué aprenderás en este curso?
        </h2>

        <p class="text-center text-muted mb-5">
            Una formación práctica, guiada y totalmente personalizada.
        </p>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-premium">
                    <i class="bi bi-brush fs-1 mb-3" style="color: var(--rosa);"></i>
                    <h5 class="fw-bold mb-2">Técnicas profesionales</h5>
                    <p class="text-muted">Aprenderás métodos avanzados de maquillaje adaptados a ti.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-premium">
                    <i class="bi bi-palette2 fs-1 mb-3" style="color: var(--rosa);"></i>
                    <h5 class="fw-bold mb-2">Práctica guiada</h5>
                    <p class="text-muted">Sesiones prácticas para pulir tu técnica sin presión.</p>
                </div>
            </div>

            <div class="col-md-4">
            <div class="card-premium">
                    <i class="bi bi-stars fs-1 mb-3" style="color: var(--rosa);"></i>
                    <h5 class="fw-bold mb-2">Certificado</h5>
                    <p class="text-muted">Recibirás un reconocimiento personalizado al finalizar.</p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
