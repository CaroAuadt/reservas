@csrf
<div class="row">
    <div class="col-sm-12">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el Nombre del Socio" value="{{ old('nombre', $socio->nombre) }}">

    </div>
    <div class="col-sm-12">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese el apellido del Socio" value="{{ old('apellido', $socio->apellido) }}">

    </div>
    <div class="col-sm-12">
        <label for="dni" class="form-label">DNI</label>
        <input type="text" name="dni" id="dni" class="form-control" placeholder="Ingrese el DNI del Socio" value="{{ old('dni', $socio->dni) }}">

    </div>
    <div class="col-sm-12">
        <label for="celular" class="form-label">Celular</label>
        <input type="text" name="celular" id="celular" class="form-control" placeholder="Ingrese el celular del Socio" value="{{ old('celular', $socio->celular) }}">

    </div>
    <div class="col-sm-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese el email del Socio" value="{{ old('email', $socio->email) }}">

    </div>
    <div class="col-sm-12 text-end">
        <button type="submit" class="btn btn-primary my-3"> Guardar</button>
    </div>
</div>
