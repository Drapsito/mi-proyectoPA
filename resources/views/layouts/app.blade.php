<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Mi Proyecto</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <h1>Proyecto Final SIS-500</h1>
        <p>Programacion Avanzada con Laravel</p>
    </header>

    <nav>
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('sobre-mi') }}">Sobre mi</a>
        <a href="{{ route('materias') }}">Materias</a>
        <a href="{{ route('contacto') }}">Contacto</a>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>Proyecto Final - Laravel - SIS-500 - Gestion 2026</p>
    </footer>

</body>
</html>