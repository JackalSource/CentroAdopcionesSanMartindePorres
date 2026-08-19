<?php

use Illuminate\Support\Facades\Route;
use App\Models\Libro;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/adopcion', function () {
    return view('adopcion');
});

Route::get('/libros', function () {
    $libros = Libro::all();

    return view('libros', compact('libros'));
});

Route::get('/libros/nuevo', function () {
    return view('libros-nuevo');
});

Route::post('/libros/nuevo', function () {
    $datos = request()->validate([
        'titulo' => 'required',
        'precio' => 'required|integer'
    ], [
        'titulo.required' => 'Falta el titulo del lbro',
        'precio.required' => 'Falta el precio del libro',
        'precio.integer' => 'Ese precio no es entero'
    ]);

    Libro::create($datos);

    return redirect('/libros');
});