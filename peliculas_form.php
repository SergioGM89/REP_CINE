<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edición de películas</title>
</head>

<body>
    <div class="container">
        <h1>Edición de películas</h1>
		 <!-- INCLUIR CÓDIGO PHP -->
        <?php
            $num_peli;
            //Comprobamos la peli a editar
            if(array_key_exists ("edita1" , $_REQUEST )){
                $num_peli = "1";
            }
            else if(array_key_exists ("edita2" , $_REQUEST )){
                $num_peli = "2";
            }
            else if(array_key_exists ("edita3" , $_REQUEST )){
                $num_peli = "3";
            }
            else if(array_key_exists ("edita4" , $_REQUEST )){
                $num_peli = "4";
            }
        ?>

        <form name="edicion" method="post" action="peliculas_edicion.php">
            <input type="hidden" name="id" value="<?php echo "".$num_peli; ?>">
            Título: <br><input type="text" name="titulo"><br>
            <br>
            Anyo: <br><input type="integer" name="anyo"><br>
            <br>
            Duración: <br><input type="integer" name="duracion"><br>
            <br>
            <input class = "btn btn-primary" type="submit" name="guardar" value="Guardar">
        </form>
        

    </div>

</body>

</html>