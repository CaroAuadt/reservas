@extends('layouts.app');
@section('contenido')

<h3> {{ $socio->apellido . ", ". $socio->nombre }}</h3>


<div class="row">
    <div class="col-sm-12">
        <label for="nombre" class="form-label">Nombre</label>
        <label name="nombre" id="nombre" class="form-control" > {{ $socio->nombre }}</label>

    </div>
    <div class="col-sm-12">
        <label for="apellido" class="form-label">Apellido</label>
        <label name="apellido" id="apellido" class="form-control"> {{$socio->apellido  }} </label>

    </div>
    <div class="col-sm-12">
        <label for="dni" class="form-label">DNI</label>
        <label name="dni" id="dni" class="form-control"> {{ $socio->dni }} </label>
    </div>
    <div class="col-sm-12">
        <label for="celular" class="form-label">Celular</label>
        <label name="celular" id="celular" class="form-control"> {{ $socio->celular }} </label>

    </div>
    <div class="col-sm-12">
        <label for="email" class="form-label">Email</label>
        <label  name="email" id="email" class="form-control"> {{ $socio->email }}</label>

    </div>
    <div class="col-sm-12">
        <label for="fecha_alta" class="form-label">Fecha de alta</label>
        <label  name="fecha_alta" id="fecha_alta" class="form-control"> {{ $socio->created_at->format('d/m/Y H:i') }} </label>

    </div>


</div>


@endsection
