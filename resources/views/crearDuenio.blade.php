<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dueños</title>
</head>
<body>
    <h1>Crear nuevo dueño</h1>
    <div>
    <form action="{{route('duenio.guardar')}}" method='POST'> 
    @csrf
    @method('POST')

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input class="form-control" id="Nombre" name='Nombre' placeholder="Walter">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
    <input class="form-control" id="Apellido" name='Apellido'placeholder='White'></input>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Correo</label>
    <input class="form-control" id="Correo" name='Correo' placeholder='WalterWhite@breakingbad.com'></input>
    </div>
    
    <button class='btn btn-success' typ='submit'>Guardar Registro</button>
    <a class='btn btn-danger' href="{{route('duenios.index')}}">Cancelar</a>
    </form>
    </div>
</body>
</html>