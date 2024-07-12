<?php

use App\Http\Controllers\CursoControlador;
use App\Http\Controllers\MaestroControlador;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludar', function () {
    return 'Hola mundo';
});

Route::get('/saludo', [SaludoController::class,'saludito']);

Route::resource('/cursos', CursoControlador::class);

Route::resource('/maestros', MaestroControlador::class);

