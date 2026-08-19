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

    request()->validate([
        'titulo' => 'required',
        'precio' => 'required|integer'
    ], [
        'titulo.required' => 'Falta el título del libro.',
        'precio.required' => 'Falta el precio del libro.',
        'precio.integer' => 'Ese precio no es un número entero.'
    ]);

    Libro::create([
        'titulo' => request()->input('titulo'),
        'precio' => request()->input('precio')
    ]);

    return redirect('/libros');
});