@extends('layouts.app')

@section('template_title')
    Actualizar Reserva
@endsection

@section('contenido')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')
                @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Reserva</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('reservas.update', $reserva->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('reserva.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
