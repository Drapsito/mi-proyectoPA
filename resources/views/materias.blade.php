@extends('layouts.app')

@section('titulo', 'Materias')

@section('contenido')

<section class="tarjeta-principal">
    <h2>Mis materias</h2>

    <p>
        En esta seccion se muestra una lista de materias registradas,
        usando objetos enviados desde el controlador.
    </p>

    <div class="resumen-materias">
        <div class="resumen-caja">
            <strong>Promedio general</strong>
            <span>{{ $promedio }}</span>
        </div>

        <div class="resumen-caja">
            <strong>Materias aprobadas</strong>
            <span>{{ $aprobadas }}</span>
        </div>

        <div class="resumen-caja">
            <strong>Total materias</strong>
            <span>{{ count($materias) }}</span>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Materia</th>
                <th>Creditos</th>
                <th>Nota</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            @foreach($materias as $m)
                <tr style="background: {{ $m->getColorEstado() }}">
                    <td>{{ $m->getCodigo() }}</td>
                    <td>{{ $m->getNombre() }}</td>
                    <td>{{ $m->getCreditos() }}</td>
                    <td>{{ $m->getNota() }}</td>
                    <td>{{ $m->getEstado() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection