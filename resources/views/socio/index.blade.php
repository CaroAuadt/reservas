@extends('layouts.app')

@section('template_title')
    Listado de Socios
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h5 id="card_title">
                                {{ __('Listado de Socios') }}
                            </h5>

                             <div class="float-right">
                                <a href="{{ route('socios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Dni</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Celular</th>
										<th>Email</th>
										<th>Fecha de Alta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($socios as $socio)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $socio->dni }}</td>
											<td>{{ $socio->nombre }}</td>
											<td>{{ $socio->apellido }}</td>
											<td>{{ $socio->celular }}</td>
											<td>{{ $socio->email }}</td>
											<td>{{ $socio->created_at->format('d/m/Y H:i') }}</td>

                                            <td>
                                                <form action="{{ route('socios.destroy',$socio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('socios.show',$socio->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('socios.edit',$socio->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $socios->links() !!}
            </div>
        </div>
    </div>
@endsection
