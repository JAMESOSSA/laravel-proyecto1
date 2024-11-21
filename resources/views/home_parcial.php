<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 1</title>
    <style>
        /* Estilo de la barra de navegación */
        .navbar-custom {
            background-color: #121212;
            border-bottom: 2px solid #00c4cc;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #e0e0e0;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link.active {
            color: #00c4cc;
            border-bottom: 2px solid #00c4cc;
        }
        .navbar-nav .nav-link:hover {
            color: #00eaff;
        }

        /* Estilo del encabezado */
        h2, h4 {
            color: #00c4cc;
            font-family: Arial, sans-serif;
        }

        /* Contenedor de la imagen */
        .image-container {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            background-color: #121212;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 196, 204, 0.4);
        }
        .image-container img {
            max-width: 50%;
            height: auto;
            border: 2px solid #00c4cc;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .image-container img:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 15px rgba(0, 196, 204, 0.6);
        }

        /* Fondo del cuerpo */
        body {
            background-color: #1f1f1f;
            color: #e0e0e0;
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <div class="text-center mt-4">
        <h2>Bienvenido a la aplicación de Alquiler</h2>
        <h4>Carros y Motos</h4>
        <br>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menú</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/clientes">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/alquiler">Alquiler</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="image-container">
        <img src="/img/clientes.jpg" class="img-fluid" alt="Imagen de Alquiler">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qnGZ4OrjZsoBXOlz5PiWtT5qD/QFeSe5MrPSqvWe/LloGNSKrivF4+8aLYVg9tBt" crossorigin="anonymous"></script>
</body>
</html>
