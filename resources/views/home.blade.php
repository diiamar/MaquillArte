@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

  <!-- Hero -->
  <header class="text-center hero-section">
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

        <div class="col-md-4">
            <div class="card h-100">
              <img src="{{ asset('/img/fantasia1.jpeg') }}" class="card-img-top " alt="servicio-fantasia">
              <div class="card-body">
                <h5 class="card-title fw-bold text-center">Fantasía</h5>
                <p class="card-text mb-3 text-center">Belleza que cuenta historias.</p>
                <a href="#" class="btn btn-rosa w-100">Ver más</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
      <div class="card h-100">
        <img src="{{ asset('/img/caracterizacion2.jpeg') }}" class="card-img-top" alt="servicio-caracterizacion">
        <div class="card-body">
          <h5 class="card-title fw-bold text-center">Caracterizacion</h5>
          <p class="card-text text-center">Cada trazo, una identidad nueva.</p>
          <a href="#" class="btn btn-rosa w-100">Ver más</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="{{ asset('/img/editorial2.jpeg') }}" class="card-img-top img-fluid" alt="servicio-editorial">
        <div class="card-body">
          <h5 class="card-title fw-bold text-center">Editorial-Moda</h5>
          <p class="card-text text-center">Belleza que marca tendencia.</p>
          <a href="#" class="btn btn-rosa w-100">Ver más</a>
        </div>
      </div>
    </div>

      </div>
    </div>
  </section>

  <!-- Cursos -->
  <section id="cursos" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5 fw-bold">Cursos Privados</h2>
      <div class="row g-4">

    <div class="col-md-4">
      <div class="card h-100">
        <img src="{{ asset('/img/editorial1.jpeg') }}" class="card-img-top " alt="Curso-Automaquillaje">
        <div class="card-body">
          <h5 class="card-title fw-bold text-center">Automaquillaje</h5>
          <p class="card-text mb-3 text-center">Eres tu propia artista, tu belleza, tu decisión.</p>
          <a href="#" class="btn btn-rosa w-100">Comprar curso</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="{{ asset('/img/MyC2.jpeg') }}" class="card-img-top" alt="Curso-MyC">
        <div class="card-body">
          <h5 class="card-title fw-bold text-center">Moros y Cristianos</h5>
          <p class="card-text text-center">Tu primer paso en el maquillaje festero.</p>
          <a href="#" class="btn btn-rosa w-100">Comprar curso</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="{{ asset('/img/social2.jpeg') }}" class="card-img-top img-fluid" alt="Curso-Social">
        <div class="card-body">
          <h5 class="card-title fw-bold text-center">Social</h5>
          <p class="card-text text-center">Domina las bases del maquillaje social.</p>
          <a href="{{ route('cursos') }}" class="btn btn-rosa w-100">Comprar curso</a>
        </div>
      </div>
    </div>

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
