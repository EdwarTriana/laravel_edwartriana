@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')

<br>
<h3 class="text-center">Editar la información del curso</h3>

<form action="/cursos/{{$course->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombrecurso">Modifique el nombre del curso </label>
        <br>
        <input style=" width:500px; " name="nombre" id="nombrecurso" value="{{$course->nombre}}" type="text">
    </div>

    <div class="mb-3">
        <label for="descripcion">Modifique el nombre del curso </label>
        <br>
        <input style=" width:500px; " name="descripcion" id="descripcion" value="{{$course->descripcion}}" type="text">
    </div>

    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen </label>
        <br>
        <input name="imagen" id="imagen"  type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar </button>
</form>
@endsection
