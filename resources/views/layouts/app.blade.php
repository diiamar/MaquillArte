<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lauriimakeupp')</title>

    @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/js/app.js'])

    <style>
        :root {
            --rosa: #ff4da6;
            --rosa-claro: #ffe4ec;
            --oscuro: #0a0a0aff;
            --fondo: #f2eef0ff;
        }
        body {
            background-color: var(--fondo);
            color: #212529;
            scroll-behavior: smooth;
        }
        a {
            text-decoration: none !important;
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    <main style="padding-top: 80px;">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
