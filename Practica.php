<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container{
            max-width: 400px;
            border: black 2px solid;
        }
    </style>
    <title>Formulario</title>
</head>
<body>
    <div class="container text-center bg-dark text-white mt-5">
    <h1>Registro</h1>
    </div>
    <form class="container p-4 mb-5 text-center" action="accion.php" method="POST">
        Nombre: <input type="text" name="name" pattern="[A-Z|a-z,Ñ|ñ|á|é|í|ó|ú|Á|É|Í|Ó|Ú|Ü|ü| ]" required><br>
        Edad: <input type="text" name="edad" pattern="[0-9]{1,99}" required><br>
        <input type="submit" class="btn btn-primary">
</html>