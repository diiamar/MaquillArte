@extends('layouts.web')

@section('title', 'Sobre mí')

@section('content')

<!-- SECCIÓN PRESENTACIÓN -->
<section class="py-5">
    <div class="container">

        <div class="row align-items-center g-5">

            <!-- FOTO -->
            <div class="col-lg-5 text-center">
                <img src="{{ asset('img/laura1.jpeg') }}" 
                    class="img-fluid rounded-4 shadow-lg about-photo"
                    alt="Maquilladora Profesional">
            </div>

            <!-- TEXTO -->
            <div class="col-lg-7">
                <span class="text-uppercase fw-bold" style="color: var(--rosa); letter-spacing: 3px;">
                    MAQUILLADORA PROFESIONAL
                </span>

                <h1 class="fw-bold display-5 mt-2 mb-3">
                    Transformando belleza en arte
                </h1>

                <p class="about-text">
                    Soy una profesional del maquillaje con <strong>Grado Superior en Caracterización
                    y Maquillaje Profesional</strong>, y experiencia internacional gracias a mis prácticas
                    Erasmus en Portugal, donde perfeccioné técnicas avanzadas como la <strong>piel blindada</strong>.
                </p>

                <p class="about-text">
                    He realizado formaciones especializadas en <strong>novias, Moros y Cristianos, drag queen,
                    maquillaje social</strong> y técnicas de tendencia. Además, tuve el privilegio de formarme con
                    <strong>Inma Azaña</strong>, referente en el sector.
                </p>

                <p class="about-text">
                    Actualmente curso el <strong>Superior especializado en Moros y Cristianos</strong>,
                    ampliando mis conocimientos en maquillaje festero.
                </p>

                <a href="/#reservas" class="btn btn-rosa btn-lg mt-3 px-4">
                    Reserva tu cita
                </a>
            </div>

        </div>

    </div>
</section>

<!-- GALERÍA PROFESIONAL -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold display-6">Mi trabajo y estilo</h2>
            <p class="text-muted fs-5">Una mezcla de técnica, precisión y creatividad</p>
        </div>

        <div class="row g-4">

            <!-- FOTO RETRATO -->
            <div class="col-md-4">
                <div class="gallery-photo shadow-sm">
                    <img src="{{ asset('img/hallowewn1.jpeg') }}" alt="Laura retrato" class="gallery-img">
                </div>
            </div>

            <!-- FOTO RETRATO 2 -->
            <div class="col-md-4">
                <div class="gallery-photo shadow-sm">
                    <img src="{{ asset('img/laura2.jpeg') }}" alt="Laura retrato 2" class="gallery-img">
                </div>
            </div>

            <!-- FOTO MAQUILLANDO -->
            <div class="col-md-4">
                <div class="gallery-photo shadow-sm">
                    <img src="{{ asset('img/novias3.jpeg') }}" alt="Laura maquillando" class="gallery-img">
                </div>
            </div>

            <!-- FOTO TRABAJO 1 -->
            <div class="col-md-4">
                <div class="gallery-photo shadow-sm">
                    <img src="{{ asset('img/novias4.jpeg') }}" alt="Trabajo de maquillaje 1" class="gallery-img">
                </div>
            </div>

            <!-- FOTO TRABAJO 2 -->
            <div class="col-md-4">
                <div class="gallery-photo shadow-sm">
                    <img src="{{ asset('img/novias5.jpeg') }}" alt="Trabajo de maquillaje 2" class="gallery-img">
                </div>
            </div>

            <!-- FOTO TRABAJO 3 -->
            <div class="col-md-4">
                <div class="gallery-photo shadow-sm">
                    <img src="{{ asset('img/fantasia1.jpeg') }}" alt="Trabajo de maquillaje 3" class="gallery-img">
                </div>
            </div>

        </div>

    </div>
</section>


<!-- SEPARADOR GRANDE -->
<div class="container py-4">
    <hr class="my-5">
</div>

<!-- SECCIÓN CURSOS QUE IMPARTE -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold display-6">Cursos que imparto</h2>
            <p class="text-muted fs-5">Formación privada personalizada a tu ritmo</p>
        </div>

        <div class="row g-4">
            
            <!-- AUTOMAQUILLAJE -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 modern-card h-100">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold mb-2">Automaquillaje</h4>
                        <p class="text-muted mb-2">Duración: <strong>4 horas</strong></p>
                        <p class="modern-desc">
                            Aprende a sacarte el máximo partido dominando las técnicas esenciales desde nivel cero.
                        </p>
                    </div>
                </div>
            </div>

            <!-- MOROS Y CRISTIANOS -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 modern-card h-100">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold mb-2">Iniciación Moros y Cristianos</h4>
                        <p class="text-muted mb-2">Duración: <strong>4h a 24h</strong></p>
                        <p class="modern-desc">
                            Formación adaptada según tu nivel: desde bases del festero hasta maquillajes completos.
                        </p>
                    </div>
                </div>
            </div>

            <!-- MAQUILLAJE SOCIAL -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 modern-card h-100">
                    <div class="card-body text-center p-4">
                        <h4 class="fw-bold mb-2">Iniciación al Maquillaje Social</h4>
                        <p class="text-muted mb-2">Duración: <strong>4h a 24h</strong></p>
                        <p class="modern-desc">
                            Domina las técnicas del maquillaje social actual con mini cursos o formación completa.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- SEPARADOR -->
<div class="container py-4">
    <hr class="my-5">
</div>

<!-- SECCIÓN MENSAJE FINAL -->
<section class="text-center py-5">
    <div class="container">

        <h2 class="fw-bold display-6 mb-3">Mi propósito</h2>

        <p class="fs-5 text-muted mb-4" style="max-width: 750px; margin: auto;">
            Acompañarte para que te sientas segura, poderosa y radiante.
            Ya sea a través de mis servicios de maquillaje o formándote 
            en mis cursos privados, estoy aquí para ayudarte a brillar.
        </p>

        <a href="/#reservas" class="btn btn-rosa btn-lg px-4">Reserva tu cita</a>

    </div>
</section>

@endsection
