@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? 'Show Reserva' }}
@endsection

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Reserva</span>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary me-md-2" href="{{ route('reservas.index') }}"> Volver </a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Fila:</strong>
                            {{ $reserva->fila }}
                        </div>
                        <div class="form-group">
                            <strong>Columna:</strong>
                            {{ $reserva->columna }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Reserva:</strong>
                            {{ $reserva->fecha_reserva->format('d/m/Y') }}
                        </div>
                        <div class="form-group">
                            <strong>Socio:</strong>
                            {{ $reserva->socio->apellido .', ' . $reserva->socio->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
