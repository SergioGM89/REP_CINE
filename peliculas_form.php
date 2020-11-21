<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Edición de películas</title>
</head>

<body>
    <div class="container">
        <h1>Edición de películas</h1>
		 <!-- INCLUIR CÓDIGO PHP -->
        <?php
            
        ?>

        <form name="edicion" method="post" action="peliculas_edicion.php">
            Título: <br><input type="text" name="titulo"><br>
            <br>
            Anyo: <br><input type="integer" name="anyo"><br>
            <br>
            Duración: <br><input type="integer" name="duracion"><br>
            <br>
            <input style="color:white; background:blue" class="guardar" type="submit" name="guardar" value="Guardar">
        </form>
        

    </div>

</body>

</html>