<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm" style="background-color:#1c1c1c;">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="/">
            <img src="{{ asset('/img/logo2.png') }}" width="50" height="50" class="rounded" alt="Logo">
            <span style="color:#ff4da6;">Lauriimakeupp</span>
        </a>

        <!-- BOTÓN HAMBURGUESA -->
        <button class="navbar-toggler border-2" style="border-color:#ff4da6;" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter: invert(82%) sepia(52%) saturate(2500%) hue-rotate(300deg) brightness(100%) contrast(95%);"></span>
        </button>

        <!-- MENÚ -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-center text-lg-start">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        <i class="bi bi-house-door-fill me-1"></i>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cursos') }}">Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="#reservas">Reservas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('sobre_mi') }}">Sobre mí</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                
            </ul>
        </div>

    </div>
</nav>

<style>
/* BOTÓN HAMBURGUESA */
.navbar-toggler {
    border: 2px solid #ff4da6;
    border-radius: 6px;
    padding: 6px;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* ICONO PERSONALIZADO */
.navbar-toggler-icon {
    filter: invert(82%) sepia(52%) saturate(2500%) hue-rotate(300deg) brightness(100%) contrast(95%);
}



/* LOGO + TEXTO centrados */
.navbar-brand {
    display: flex;
    align-items: center;
    gap: 8px;
}

.navbar-brand img {
    border-radius: 8px;
    object-fit: cover;
}

/* COLOR DE LINKS */
.nav-link {
    color: #ff4da6 !important;
    font-weight: 600;
}

.nav-link:hover {
    color: #ffe4ec !important;
}

/* MENÚ DESPLEGADO EN MÓVIL */
@media (max-width: 991px) {
    .navbar-collapse {
        background-color: #1c1c1c;
        padding: 1.2rem;
        border-radius: 12px;
        margin-top: 10px;
    }
}
</style>

