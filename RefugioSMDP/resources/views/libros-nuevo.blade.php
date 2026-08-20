@extends('layouts.base')

@section('contenido')

    <h2>Regitrar libro</h2>

    @if ($errors->any())

        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>

    @endif

    <form action="/libros/nuevo" method="POST">

        @csrf

        <label for="titulo">Titulodel libro</label>
        <input type="text" id="titulo" name="titulo">

        <br><br>

        <label for="precio">Precio en Bs</label>
        <input type="number" id="precio" name="precio">

        <br><br>

        <button type="submit">Registrar libro</button>

    </form>

@endsection