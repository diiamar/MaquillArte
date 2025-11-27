@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

  <!-- Hero -->
  <header class="text-center">
    <div class="container">
      <h1 class="fw-bold">Maquilladora Profesional</h1>
      <p class="lead">Resalta tu belleza con técnicas actuales y personalizadas</p>
      <a href="#reservas" class="btn btn-rosa me-2">Reservar cita</a>
      <a href="#cursos" class="btn btn-outline-light">Ver cursos</a>
    </div>
  </header>

  <!-- Servicios -->
  <section id="servicios" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5 fw-bold">Servicios</h2>
      <div class="row g-4">
        <div class="col-md-4 text-center">
          <i class="bi bi-brush servicio-icon"></i>
          <h5 class="mt-3">Maquillaje Social</h5>
          <p>Ideal para eventos y ocasiones especiales, con estilo moderno y duradero.</p>
        </div>

        <div class="col-md-4 text-center">
          <i class="bi bi-heart servicio-icon"></i>
          <h5 class="mt-3">Maquillaje de Novias</h5>
          <p>Un look único y perfecto para tu gran día, totalmente personalizado.</p>
        </div>

        <div class="col-md-4 text-center">
          <i class="bi bi-person-check servicio-icon"></i>
          <h5 class="mt-3">Moros y Cristianos</h5>
          <p>Maquillaje artístico y temático con acabados impactantes y detallados.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Cursos -->
  <section id="cursos" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5 fw-bold">Cursos Destacados</h2>
      <div class="row g-4">

        @include('partials.cursos-basic')
        @include('partials.cursos-pro')
        @include('partials.cursos-advanced')

      </div>
    </div>
  </section>

  <!-- Reservas -->
  <section id="reservas" class="py-5 text-center">
    <div class="container">
      <h2 class="fw-bold mb-3">Agenda tu cita</h2>
      <p class="mb-4">Selecciona fecha y hora fácilmente.</p>
      <a href="#" class="btn btn-rosa btn-lg">Reservar ahora</a>
    </div>
  </section>

@endsection
