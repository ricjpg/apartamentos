<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Index</h1>
    


    <a class="btn btn-primary" href="{{route('apartamento.consulta')}}">Apartamento Consulta</a>
    <a class="btn btn-primary" href="{{route('duenio.consulta')}}">Dueño Consulta</a>
    <a class="btn btn-primary" href="{{route('duenios.index')}}">Lista de Dueños</a>
    <a class="btn btn-primary" href="{{route('apartamentos.index')}}">Lista de Apartamentos</a>
    <a class="btn btn-primary" href="{{route('calcular.index')}}">Consultar Precio de Apartamento</a>
</body>
</html>