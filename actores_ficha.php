<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Directores | Ficha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <div class="alert alert-secondary d-flex">
        <a href="./peliculas.php" class="btn btn-dark">Películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">
	<!-- INCLUIR CÓDIGO PHP -->
        <?php
            include("lib/utils.php");

            $array_actores = tabla_actores();
            
            for ($i=0; $i<count($array_actores); $i++) {
                if ($array_actores[$i]["id"] == $_GET['id']) {
                    echo "<b>Nombre: </b>".$array_actores[$i]["nombre"]."<br>";
                    echo "<b>Año: </b>".$array_actores[$i]["anyo"]."<br>";
                    echo "<b>País: </b>".$array_actores[$i]["lugar"]."<br>";
                    continue;
                }
            }
        ?>
    </div>
</body>

</html>