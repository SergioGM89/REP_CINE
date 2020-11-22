<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Película guardada</title>
</head>

<body>
<div class="alert alert-success" role="alert">
            <!-- INCLUIR CÓDIGO PHP -->
            <?php
        //Llamamos a utils.php
        include("lib/utils.php");

        $file_pelis = "bbdd/peliculas.csv";
        //Llamamos a la función de edición
        editar_pelicula($file_pelis, $_REQUEST["id"], $_REQUEST["titulo"], $_REQUEST["anyo"], $_REQUEST["duracion"]);
    ?>
    <p>La película ha sido guardada</p>
    <a href="index.html">Volver al inicio</a>
</body>

</html>