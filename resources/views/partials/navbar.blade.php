<nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background-color: #1c1c1c; z-index: 1030;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#" style="color:#ff4da6;">
         <img src="{{ asset('/img/logo2.png') }}" alt="Logo lauriimakeup" class="d-inline-block align-text-top" width="50" height="50">    
        Lauriimakeupp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#servicios" style="color:#ff4da6;">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="#cursos" style="color:#ff4da6;">Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="#reservas" style="color:#ff4da6;">Reservas</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto" style="color:#ff4da6;">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
<style>
.navbar-toggler {
    border: 2px solid #ff4da6;        /* borde rosa */
    border-radius: 6px;               /* redondeado */
    width: 45px;
    height: 45px;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.navbar-brand {
    display: flex;
    align-items: center;   /* centra logo y texto verticalmente */
    gap: 10px;             /* espacio entre logo y texto */
}
.navbar-brand img {
    border-radius: 10px;
    object-fit: cover;
}

.navbar-toggler-icon {
    background-image: none !important;  /* elimina icono default */
}

.navbar-toggler::after {
    content: "\2630";   /* icono ≡ */
    font-size: 26px;
    color: #ff4da6;
    line-height: 1;
    display: block;
}

.nav-link:hover {
    color: #ffe4ec !important;
}

</style>

<script>
// Ajusta padding-top del main según altura de navbar
document.addEventListener('DOMContentLoaded', function() {
    const main = document.querySelector('main');
    const navbar = document.querySelector('.navbar');
    if(main && navbar) {
        main.style.paddingTop = navbar.offsetHeight + 'px';
    }
});
</script>