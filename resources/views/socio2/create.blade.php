@extends('layouts.app');
@section('contenido')

<h3> Agregar Socio</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('socio.store') }}" method="POST">
   <x-socio-form-body/>
</form>
@endsection
