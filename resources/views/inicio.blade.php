@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

<section class="tarjeta-principal">
    <h2>Bienvenido a mi proyecto</h2>

    <p>
        Este es mi portafolio academico desarrollado para la materia
        <strong>SIS-500 Programacion Avanzada</strong>.
    </p>
    
    <p>
    El objetivo de este proyecto es aplicar rutas, controladores, vistas Blade,
    validacion, base de datos y control de versiones con Git.
    </p>

    <div class="datos-inicio">
        <div class="dato">
            <strong>Nombre:</strong>
            <span>{{ $nombre }}</span>
        </div>

        <div class="dato">
            <strong>Carrera:</strong>
            <span>{{ $carrera }}</span>
        </div>

        <div class="dato">
            <strong>Semestre:</strong>
            <span>{{ $semestre }}</span>
        </div>

        <div class="dato">
            <strong>Anio:</strong>
            <span>{{ $anio }}</span>
        </div>
    </div>
</section>

@endsection