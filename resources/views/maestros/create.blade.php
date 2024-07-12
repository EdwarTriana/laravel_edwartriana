@extends('layouts.app')

@section('titulo', 'crear curso')

@section('contenido')

<br>
    <h3>Ingresar un nuevo Maestro</h3>
<br>

<form action="/maestros"method="post">
    @csrf
    <div class="mb-3">
      <label for="nombremaestro" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombremaestro" name="nombre" >
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" >
    </div>
    <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" class="form-control" id="edad" name="edad" >
    </div>

    <div class="mb-3">
        <label for="especialidad" class="form-label">Especialidad</label>
        <input type="text" class="form-control" id="especialidad" name="especialidad" >
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

@endsection
