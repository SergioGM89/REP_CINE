<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Películas | Ficha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <div class="alert alert-secondary d-flex">
        <a href="./peliculas.php" class="btn btn-dark">Listar películas</a>&nbsp;&nbsp;
    </div>
    <div class="container">
       <!-- INCLUIR CÓDIGO PHP -->
        <?php
            include("lib/utils.php");

            $array_pelis = lee_y_devuelve_pelis();
            
            for($i=0; $i<count($array_pelis); $i++){
                if($array_pelis[$i]["id"] == $_GET['id']){
                    echo "<b>Título: </b>".$array_pelis[$i]["titulo"]."<br>";
                    echo "<b>Año: </b>".$array_pelis[$i]["anyo"]."<br>";
                    echo "<b>Duración: </b>".$array_pelis[$i]["duracion"]."<br>";
                    echo "<b>Director:</b><br>";
                    $array_directores = getDirectores($_GET['id']);
                    for($d=0; $d<count($array_directores); $d++){
                        $id_dir = $array_directores[$d]['id'];
                        echo "<a href=directores_ficha.php?id=$id_dir>".($array_directores[$d]['nombre'])."</a><br>";
                    }
                    echo "<b>Actores:</b><br>";
                    $array_actores = getActores($_GET['id']);
                    for($d=0; $d<count($array_actores); $d++){
                        $id_act = $array_actores[$d]['id'];
                        echo "<a href=actores_ficha.php?id=$id_act>".($array_actores[$d]['nombre'])."</a><br>";
                    }
                    continue;
                }
            }

        ?>
    </div>
</body>

</html>