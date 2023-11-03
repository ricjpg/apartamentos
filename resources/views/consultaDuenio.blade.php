<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>
    <h1>Consultar apartamentos por Id de dueño</h1>

    <form action="{{route('duenio.respuesta')}}", method="get">
    @csrf
    @method('get')
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ingrese el Id del Dueño para devolver todos sus apartamentos</label>
    <input type="text" class="form-control" id="idDuenio" name="idDuenio" placeholder="un numero entero del 1 en adelante">
    </div>
    
    <button type="submit" class="btn btn-primary">Consultar</button>
    
    </form>

</body>
</html>