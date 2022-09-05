@extends('layouts.app');
@section('contenido')

<h3>Listado de Socios</h3>
<table class="table table-stripped table-hover">
    <thead>
        <tr>
            <th>
                ID Socio
            </th>
            <th>
                Nombre
            </th>
            <th>
                Apellido
            </th>
            <th>
                DNI
            </th>
            <th>
                Celular
            </th>
            <th>
                Email
            </th>
            <th>
                Fecha de Alta
            </th>
            <th>
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($socios as $socio )


            <td> {{ $socio->id }} </td>

            <td> {{ $socio->nombre }} </td>

            <td> {{ $socio->apellido }} </td>

            <td> {{ $socio->dni }} </td>

            <td> {{ $socio->celular }} </td>

            <td> {{ $socio->email }} </td>

            <td> {{ $socio->created_at->format('d/m/Y H:i') }} </td>
            @endforeach
        </tr>
    </tbody>
</table>
@endsection
