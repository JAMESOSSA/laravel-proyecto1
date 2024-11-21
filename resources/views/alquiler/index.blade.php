<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>index de alquiler</h1>
    <table class="table table-striped">
        <thead>
            
            <tr>
                
                <th>Codigo</th>
                <th>Nombre producto</th>

                
            </tr>
        </thead>
        <tbody>
            @foreach ($alquiler_controllers as $alquiler)
            <tr>
                <th>{{$alquiler->code}}</th>
                <th>{{$alquiler->nombre_producto}}</th>

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