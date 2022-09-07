<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('fila') }}
            <select name="fila" id="fila" class="form-select">

                @foreach ($reserva::FILAS as $fila)
                <option  class="dropdown-item" {!!  ( old('fila') == $fila) || ( $reserva->fila == $fila)  ? "selected" : "" !!} value ="{!! $fila !!}" > {!! old('fila', $fila) !!} </option>

                @endforeach
            </select>



            {!! $errors->first('fila', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('columna') }}


            <select name="columna" id="columna" class="form-select">

                @foreach ($reserva::COLUMNAS as $columna)
                <option  class="dropdown-item" {!!  ( old('fila') == $columna) || ( $reserva->columna == $columna)  ? "selected" : "" !!} value ="{!! $columna !!}" > {!! old('columna', $columna) !!} </option>

                @endforeach
            </select>



            {!! $errors->first('columna', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_reserva') }}




            {{ Form::date('fecha_reserva', ($reserva->fecha_reserva == 'null') ? old('fecha_reserva') : $reserva->fecha_reserva , ['class' => 'form-control' . ($errors->has('fecha_reserva') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Reserva']) }}
            {!! $errors->first('fecha_reserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Socio') }}
            <select name="socio_id" id="socio_id" class="form-select">
                <option value=""> -- Seleccione un socio --</option>
                @foreach ($socios as $socio)
                <option  class="dropdown-item" {!!  ( old('socio_id') == $socio->id) || ( $reserva->socio_id == $socio->id)  ? "selected" : "" !!} value ="{!! $socio->id!!}" > {!! old('descripcion', $socio->apellido . ', ' . $socio->nombre) !!} </option>

                @endforeach
            </select>
            {!! $errors->first('socio_id', '<div class="invalid-feedback">:message</div>') !!}


        </div>

    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
