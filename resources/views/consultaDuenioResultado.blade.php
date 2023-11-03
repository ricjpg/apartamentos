<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <h1>Propiedades del que Pertenecen al dueño</h1>

    <div>
            <table class="table">
        <thead>
            <tr>
            <th scope="col">Id apartamento</th>
            <th scope="col">Piso</th>
            <th scope="col">Area</th>
            <th scope="col">Color</th>
            <th scope="col">Id Dueño</th>
            <th scope="col">estado</th>
            
            </tr>
        </thead>

        @foreach ($Apartamentos as $item)
        <tbody>
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->piso}}</td>
            <td>{{$item->area}}</td>
            <td>{{$item->color}}</td>
            <td>{{$item->idDuenio}}</td>
            <td>{{$item->estado}}</td>
            
            </tr>
        </tbody>
        @endforeach

        </table>
        <a class="btn btn-primary" href="{{route('duenio.consulta')}}">Realizar otra consulta</a>
    </div>

</body>
</html>