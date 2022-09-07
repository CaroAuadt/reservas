@extends('layouts.app')

@section('template_title')
    {{ $socio->nombre ?? 'Show Socio' }}
@endsection

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h5 class="card-title">Ver Socio</h5>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary me-md-2" href="{{ route('socios.index') }}"> Volver </a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $socio->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $socio->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $socio->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $socio->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $socio->email }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Alta:</strong>
                            {{ $socio->created_at->format('d/m/Y H:i') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
