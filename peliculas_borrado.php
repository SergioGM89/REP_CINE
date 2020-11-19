<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Borrar película</title>
</head>
<body>
<div class="alert alert-success" role="alert">
            <!-- INCLUIR CÓDIGO PHP -->
    <?php
        //Llamamos a utils.php
        include("lib/utils.php");

        $file_pelis = "bbdd/peliculas.csv";
    
        //Comprobamos la peli a borrar
        if(array_key_exists ("borra1" , $_REQUEST )){
            $num_peli = "1";
        }
        else if(array_key_exists ("borra2" , $_REQUEST )){
            $num_peli = "2";
        }
        else if(array_key_exists ("borra3" , $_REQUEST )){
            $num_peli = "3";
        }
        else if(array_key_exists ("borra4" , $_REQUEST )){
            $num_peli = "4";
        }

        //Llamamos a la función de borrado
        borrar_pelicula($file_pelis, $num_peli);
    ?>

    <p>La película ha sido borrada con éxito</p>

    <a href="index.html">Volver al incio</a>
    
</body>
</html>