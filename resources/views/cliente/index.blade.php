<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>index de clientes</h1>
    <table class="table table-striped">
        <thead>
            
            <tr>
                
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <th>{{$cliente->code}}</th>
                <th>{{$cliente->nombre}}</th>
                <th>{{$cliente->telefono}}</th>
                <th>{{$cliente->direccion}}</th>
                <th>{{$cliente->email}}</th>
                <th>
                    <button class="btn btn-outline-warning">Editar</button>
                    <button class="btn btn-outline-danger">Borrar</button>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>