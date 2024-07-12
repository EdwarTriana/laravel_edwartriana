@extends('layouts.app')

@section('titulo', 'crear curso')

@section('contenido')

<br>
<h3>Listado de cursos activos</h3>
<br>

<div class="row">
    @foreach ($course as $cursito )
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img style="heigth:200px; width:250px; margin:20px" src="{{Storage::url($cursito->imagen)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$cursito->nombre}}</h5>
                  <p class="card-text">{{$cursito->descripcion}}</p>
                  <a href="/cursos/{{$cursito->id}}" class="btn btn-danger">Ver detalles</a>
                </div>
              </div>
        </div>
    @endforeach

</div>

@endsection
