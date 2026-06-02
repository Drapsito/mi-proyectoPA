@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')

<section class="tarjeta-principal">
    <h2>Contacto</h2>

    <p>
        En esta seccion puedes enviar un mensaje mediante un formulario.
    </p>

    @if(session('exito'))
        <div class="mensaje-confirmacion">
            {{ session('exito') }}
        </div>
    @endif

    <form action="{{ route('contacto.procesar') }}" method="POST">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">

        @error('nombre')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="email">Correo electronico</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">

        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" rows="5">{{ old('mensaje') }}</textarea>

        @error('mensaje')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit">Enviar mensaje</button>
    </form>
</section>

@endsection