@extends('layouts.app')

@section('titulo', 'Sobre mi')

@section('contenido')

<section class="tarjeta-principal">
    <h2>Sobre mi</h2>

    <p>
        Mi nombre es <strong>{{ $nombre }}</strong>, soy estudiante de la carrera
        <strong>{{ $carrera }}</strong> y actualmente curso el
        <strong>{{ $semestre }}</strong>.
    </p>

    <p>
        Este proyecto fue desarrollado para aplicar rutas, controladores,
        vistas Blade y estructura MVC en Laravel.
    </p>
    <p>
    Me interesa el desarrollo web porque permite crear soluciones utiles
    para problemas reales.
    </p>

    <h3>Mis habilidades</h3>

    <div class="habilidades">
        @foreach($habilidades as $habilidad => $porcentaje)
            <div class="habilidad">
                <div class="habilidad-info">
                    <span>{{ $habilidad }}</span>
                    <span>{{ $porcentaje }}%</span>
                </div>

                <div class="barra">
                    <div class="progreso" style="width: {{ $porcentaje }}%;"></div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection