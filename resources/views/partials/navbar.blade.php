<nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background-color: #1c1c1c; z-index: 1030;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#" style="color:#ff4da6;">Lauriimakeupp</a>
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
    color: #ff4da6; /* rosa */
    border-color: #ff4da6; /* borde del botón */
    height: 40px;  /* alto del botón completo */
    width: 40px;   /* ancho del botón completo */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    
}

.navbar-toggler-icon {
    background-image: none; /* quitamos el icono por defecto */

}

.navbar-toggler::after {
    content: '\2630'; /* código Unicode de tres líneas ≡ */
    font-size: 30px;
    color: #ff4da6;
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