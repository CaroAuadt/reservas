<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body class="bg-light">
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h1>
                    Gestión de Reservas
                </h1>
            </div>
        </div>
        <div class="col-sm-12">
            <a href="{{ route('socios.create') }}" class="btn btn-link"> Crear nuevo Socio </a>
            <a href="{{ route('socios.index') }}" class="btn btn-link"> Listar Socios </a>
            <a href="{{ route('reservas.index') }}" class="btn btn-link"> Listar Reservas </a>
            <a href="{{ route('reservas.create') }}" class="btn btn-link"> Crear Reserva </a>
        </div>
<div class="col-sm-12">


@yield('contenido')
</div>
    </div>

</body>
</html>

