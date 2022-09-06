@extends('layouts.app');
@section('contenido')

<h3> Editar Socio {{ $socio->apellido . ", ". $socio->nombre }}</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('socio.update', $socio) }}" method="POST">
    @method('put')
   <x-socio-form-body :socio="$socio"/>

</form>
@endsection
