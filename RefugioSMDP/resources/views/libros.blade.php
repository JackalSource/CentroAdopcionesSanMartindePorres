@extends('layouts.base')

@section('contenido')

    <p>
        Libreria el laapiz es una librera de barrio que ofrece libros
        y permite mantener un catalogo organizado
    </p>

    <p>
        Hay {{ count($libros) }} libros en el catalogo
    </p>

    @foreach ($libros as $libro)

        <div>
            <h2>{{ $libro->titulo }}</h2>
            <p>Precio: {{ $libro->precio }} Bs</p>
        </div>

    @endforeach

    <p>
        Catalogo atendido por Mauricio Gustavo Aparicio Muñoz
    </p>

    <a href="/libros/nuevo">Registrar nuevo libro</a>

@endsection