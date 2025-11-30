<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lauriimakeupp')</title>

    @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --rosa: #ff4da6;
            --rosa-claro: #ffe4ec;
            --oscuro: #0a0a0aff;
            --fondo: #f5dbe8ff;
        }
        body {
            background-color: var(--fondo);
            color: #212529;
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }
        a {
            text-decoration: none !important;
        }

         h1, h2, h3, h4, h5, h6 {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        }

        .lead {
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
        }

        .btn-rosa {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    <main style="padding-top: 80px;">
        @yield('content')
    </main>

    @include('partials.footer')
    @yield('scripts')
</body>
</html>