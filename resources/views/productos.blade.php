@extends('layouts.app')

@section('titulo', 'Productos')

@section('contenido')

<section class="tarjeta-principal">
    <h2>Lista de Productos</h2>

    <p>
        En esta pagina se muestran los productos disponibles de la tienda
        con sus precios y categorias.
    </p>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
            </tr>
        </thead>

        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto['nombre'] }}</td>
                    <td>Bs. {{ number_format($producto['precio'], 2) }}</td>
                    <td>{{ $producto['categoria'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>
        Precio promedio: Bs. {{ number_format($precioPromedio, 2) }}
    </h3>
</section>

@endsection