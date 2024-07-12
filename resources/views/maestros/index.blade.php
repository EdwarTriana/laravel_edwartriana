@extends('layouts.app')

@section('titulo', 'crear curso')

@section('contenido')

<br>
<h3>Listado de Maestros</h3>
<br>

<div class="row">
    @foreach ($course as $profesor )
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$profesor->nombre}}</h5>
                  <p class="card-text">{{$profesor->apellido}}</p>
                  <p class="card-text">{{$profesor->edad}}</p>
                  <p class="card-text">{{$profesor->especialidad}}</p>
                  <a href="#" class="btn btn-danger">Ver detalles</a>
                </div>
              </div>
        </div>
    @endforeach

</div>

@endsection
