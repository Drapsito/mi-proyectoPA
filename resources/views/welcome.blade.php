<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final SIS-500</title>

    <style>
        body{
            margin:0;
            font-family:Verdana, Arial, sans-serif;
            background:#e3f6ff;
            color:#1d3557;
        }

        header{
            background:#1565c0;
            color:white;
            padding:25px;
            text-align:center;
        }

        header h1{
            margin:0;
            font-size:36px;
        }

        header p{
            margin-top:10px;
            font-size:18px;
        }

        nav{
            background:#64b5f6;
            padding:15px;
            text-align:center;
        }

        nav a{
            color:white;
            text-decoration:none;
            font-weight:bold;
            margin:0 15px;
            padding:8px 12px;
            border-radius:8px;
        }

        nav a:hover{
            background:#1976d2;
        }

        .contenedor{
            width:80%;
            margin:35px auto;
            background:white;
            padding:30px;
            border-radius:15px;
            border:3px solid #90caf9;
            box-shadow:0 4px 12px rgba(0,0,0,0.15);
        }

        h2{
            color:#1565c0;
            border-bottom:2px solid #ffd54f;
            padding-bottom:10px;
        }

        .datos{
            margin-top:20px;
        }

        .dato{
            background:#f1faff;
            margin:12px 0;
            padding:15px;
            border-left:6px solid #42a5f5;
            border-radius:8px;
        }

        .dato strong{
            color:#0d47a1;
        }

        footer{
            text-align:center;
            background:#1565c0;
            color:white;
            padding:15px;
            margin-top:40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Proyecto Final — SIS-500</h1>
        <p>Programación Avanzada con Laravel</p>
    </header>

    <nav>
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('sobre-mi') }}">Sobre mí</a>
        <a href="{{ route('materias') }}">Materias</a>
        <a href="{{ route('contacto') }}">Contacto</a>
    </nav>

    <main class="contenedor">
        <h2>Bienvenido a mi proyecto</h2>

        <p>
            Este sitio web fue desarrollado como parte del proyecto final de la materia
            SIS-500 Programación Avanzada, utilizando el framework Laravel.
        </p>

        <section class="datos">
            <div class="dato">
                <strong>Nombre:</strong> {{ $nombre }}
            </div>

            <div class="dato">
                <strong>Carrera:</strong> {{ $carrera }}
            </div>

            <div class="dato">
                <strong>Semestre:</strong> {{ $semestre }}
            </div>

            <div class="dato">
                <strong>Año:</strong> {{ $anio }}
            </div>
        </section>
    </main>

    <footer>
        Proyecto Final Laravel — {{ $anio }}
    </footer>

</body>
</html>