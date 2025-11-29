@extends('layouts.app')

@section('title', 'Cursos')

@section('content')

<section class="py-5">
    <div class="container">

        <!-- TÍTULO -->
        <div class="text-center mb-4 ">
            <h1 class="fw-bold display-5" style="font-family: 'Playfair Display', serif;">
                Cursos Profesionales
            </h1>
            <p class="text-muted fs-5">
                Formación exclusiva diseñada para potenciar tus habilidades.
            </p>
        </div>

        <!-- BUSCADOR EN TIEMPO REAL -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-6">
                <input 
                    type="text"
                    id="buscadorCursos"
                    class="form-control shadow-sm"
                    placeholder="Buscar un curso..."
                    style="border-radius: 30px; padding: 12px 20px;">
            </div>
        </div>

        <!-- LISTA DE CURSOS -->
        <div class="row g-4" id="listaCursos">
            @foreach($cursos as $curso)
                <div class="col-md-4">
                    <div class="premium-card h-100">

                        <div class="premium-card-img">
                            <img src="{{ asset('img/' . $curso->imagen) }}" 
                                 alt="{{ $curso->titulo }}"
                                 style="width:100%; height:250px; object-fit:cover;">
                        </div>

                        <div class="premium-card-body p-4">
                            <h4 class="fw-bold mb-2">{{ $curso->titulo }}</h4>
                            <p class="text-muted" style="min-height:60px;">
                                {{ $curso->descripcion_corta }}
                            </p>

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

<script>
document.addEventListener('DOMContentLoaded', function() {

    const buscador = document.getElementById('buscadorCursos');
    const lista = document.getElementById('listaCursos');

    buscador.addEventListener('keyup', function() {

        let query = this.value;

        fetch("{{ route('cursos.buscar') }}?q=" + query)
            .then(res => res.json())
            .then(data => {

                lista.innerHTML = "";

                if (data.length === 0) {
                    lista.innerHTML = `
                        <p class="text-center text-muted fs-4 mt-4">
                            No se encontraron cursos.
                        </p>`;
                    return;
                }

                data.forEach(curso => {
                    lista.innerHTML += `
                        <div class="col-md-4">
                            <div class="premium-card h-100">
                                <div class="premium-card-img">
                                    <img src="{{ asset('img') }}/${curso.imagen}" 
                                         style="width:100%; height:250px; object-fit:cover;">
                                </div>
                                <div class="premium-card-body p-4">
                                    <h4 class="fw-bold mb-2">${curso.titulo}</h4>
                                    <p class="text-muted" style="min-height: 60px;">
                                        ${curso.descripcion_corta ?? ""}
                                    </p>
                                    <a href="/curso/${curso.slug}" class="btn btn-rosa w-100 mt-3">
                                        Ver Detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
                });
            })
            .catch(err => console.error("Error en búsqueda:", err));
    });

});
</script>
