<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>
    <h1>Calcular</h1>

    <form action="{{route('calcular.total')}}", method="get">
    @csrf
    @method('get')
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ingrese el numero de piso (Entero)</label>
    <input type="text" class="form-control" id="Piso" name="Piso" placeholder="1-12">
    </div>
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ingrese los metros cuadrados mt^2 (double)</label>
    <input type="text" class="form-control" id="mtSqrt" name="mtSqrt" placeholder="23.45">
    </div>
    
    <button type="submit" class="btn btn-primary">Calcular</button>
    
    </form>

</body>
</html>