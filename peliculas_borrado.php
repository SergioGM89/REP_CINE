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

        //Comprobamos la peli a borrar
        if(array_key_exists ("borrado1" , $_REQUEST )){
            $peli = "padrino";
        }
        else if(array_key_exists ("borrado2" , $_REQUEST )){
            $peli = "padrino II";
        }
        else if(array_key_exists ("borrado3" , $_REQUEST )){
            $peli = "senderos";
        }
        else if(array_key_exists ("borrado4" , $_REQUEST )){
            $peli = "front";
        }

        //Llamamos a la función de borrado
        borrar_pelicula($peli);
    ?>
    
</body>
</html>