@extends('layouts.app')

@section('title', 'Cursos')

@section('content')

<!-- BANNER PRINCIPAL -->
<section class="py-5 text-center">
    <div class="container">
        <h1 class="fw-bold display-5" style="font-family: 'Playfair Display', serif;">Cursos Profesionales</h1>
        <p class="text-muted fs-5 mt-2">
            Formación especializada para todos los niveles: desde cursos personalizados de 4h 
            totalmente adaptados, hasta cursos intensivos de 24h en los estilos más demandados.
        </p>
    </div>
</section>

<!-- BUSCADOR -->
<section class="pb-4">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-7">
                <input 
                    type="text"
                    id="buscadorCursos"
                    class="form-control shadow-sm"
                    placeholder="Buscar un curso..."
                    style="border-radius: 30px; padding: 12px 20px;">
            </div>
        </div>
    </div>
</section>

<!-- CURSOS PERSONALIZADOS (4H) -->
<section class="pb-5">
    <div class="container">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold" style="font-family: 'Playfair Display', serif;">Cursos Personalizados (4h)</h2>
            <span class="text-muted">Puedes adaptar el temario completamente a tus necesidades</span>
        </div>

        <div class="row g-4" id="cursosPersonalizados">

            @foreach($cursos->where('tipo', 'personalizado') as $curso)
                <div class="col-md-4 curso-item" data-titulo="{{ strtolower($curso->titulo) }}">
                    <div class="premium-card h-100 shadow-lg rounded-4 overflow-hidden">

                        <div class="premium-card-img" style="height: 230px; overflow: hidden;">
                            <img src="{{ asset('img/' . $curso->imagen) }}"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>

                        <div class="premium-card-body p-4">
                            <h4 class="fw-bold mb-2">{{ $curso->titulo }}</h4>

                            <p class="text-muted" style="min-height: 55px;">
                                {{ $curso->descripcion_corta ?? 'Curso personalizado de 4 horas totalmente adaptado a ti.' }}
                            </p>

                            <span class="badge" style="background-color: var(--rosa);">4 horas</span>

                            <a href="{{ route('curso.show', $curso->slug) }}"
                               class="btn btn-rosa w-100 mt-3">
                                Ver Detalles
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<!-- CURSOS INTENSIVOS (24H) -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold" style="font-family: 'Playfair Display', serif;">Cursos Intensivos (24h)</h2>
            <span class="text-muted">
                Reparte tus clases durante 1 mes | Moros y Cristianos · Social · Novias
            </span>
        </div>

        <div class="row g-4" id="cursosIntensivos">

            @foreach($cursos->where('tipo', 'intensivo') as $curso)
                <div class="col-md-4 curso-item" data-titulo="{{ strtolower($curso->titulo) }}">
                    <div class="premium-card h-100 shadow-lg rounded-4 overflow-hidden">

                        <!-- IMAGEN -->
                        <div class="premium-card-img" style="height: 240px; overflow: hidden;">
                            <img src="{{ asset('img/' . $curso->imagen) }}"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>

                        <!-- INFORMACIÓN -->
                        <div class="premium-card-body p-4">

                            <h4 class="fw-bold mb-2" style="min-height: 50px;">
                                {{ $curso->titulo }}
                            </h4>

                            <p class="text-muted" style="min-height: 65px;">
                                {{ $curso->descripcion_corta 
                                    ?? 'Curso intensivo de 24 horas con programación flexible durante 30 días.' }}
                            </p>

                            <span class="badge bg-dark">24 horas</span>

                            <a href="{{ route('curso.show', $curso->slug) }}"
                               class="btn btn-rosa w-100 mt-3">
                                Ver Detalles
                            </a>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>


@endsection

<!-- BUSCADOR EN TIEMPO REAL -->
<script>
document.addEventListener('DOMContentLoaded', function() {

    const input = document.getElementById('buscadorCursos');
    const cursos = document.querySelectorAll('.curso-item');

    input.addEventListener('keyup', function () {
        const text = this.value.toLowerCase();

        cursos.forEach(curso => {
            const titulo = curso.dataset.titulo;
            curso.style.display = titulo.includes(text) ? '' : 'none';
        });
    });

});
</script>
