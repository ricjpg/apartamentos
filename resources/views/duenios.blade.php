<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dueños</title>
</head>
<body>
    <h1>Listado de Dueños</h1>
    <a class="btn btn-primary "href="{{route('duenio.crear')}}">Crear nuevo dueño</a>

    <div>
            <table class="table">
        <thead>
            <tr>
            <th scope="col">Id Dueño</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            
            </tr>
        </thead>

        @foreach ($Duenios as $item)
        <tbody>
            <tr>
            <th scope="row">{{$item->idDuenio}}</th>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellido}}</td>
            <td>{{$item->correo}}</td>
            
            </tr>
        </tbody>
        @endforeach

        </table>
    </div>

</body>
</html>