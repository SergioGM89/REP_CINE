<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Películas</title>
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
        <div class="row mx-auto">
            <!-- INCLUIR CÓDIGO PHP -->
            <?php
                //Llamamos a utils.php
                include("lib/utils.php");
                
                $array_peliculas = lee_y_devuelve_pelis();
                //leemos el archivo 
                $manejador = fopen($file, "r");
                // almacenara la data
            ?>
            <table>
            <!-- EL PADRINO -->
				<td>
                    <div class="imagen" style="margin-bottom:5px;">
                        <a href="imgs/peliculas/1.jpg" title="El padrino" alt="El padrino">
                                <img class="card-img-top" src="imgs/peliculas/1.jpg" >		
                        </a>
                    </div>
                    
                    <div class="meta">
                    <a class="nombre" href="imgs/peliculas/1.jpg" title="El padrino">El padrino</a>
                    </div>
                    <table>
                    <td class="botones">
                    <div>
                        <form class="boton_editar" method="post" action="peliculas_form.php">
                        <div class="editar"><input class="editar" type="submit" value="Editar" name="edita1"></div>
                    </div>
                    </td>

                    <td class="botones">
                    <div>
                        <form class="boton_borrar" method="post" action="peliculas_borrado.php">
                        <div class="borrar"><input class="borrar"type="submit" value="Borrar" name="borra1"></div>
                    </div>
                    </td>
                    </table>
                    
                </td>
                <!-- EL PADRINO II -->
                <td>
                    <div class="imagen" style="margin-bottom:5px;">
                        <a href="imgs/peliculas/1.jpg" title="El padrino 2" alt="El padrino 2">
                                <img class="card-img-top" src="imgs/peliculas/2.jpg" >
                        </a>
                    </div>
                    
                    <div class="meta">
                    <a class="nombre" href="imgs/peliculas/2.jpg" title="El padrino 2">El padrino II</a>
                    </div>
                    
                    
                    
                </td>
                <!-- SENDEROS DE GLORIA -->
                <td>
                    <div class="imagen" style="margin-bottom:5px;">
                        <a href="imgs/peliculas/1.jpg" title="Senderos de gloria" alt="Senderos de gloria">
                                <img class="card-img-top" src="imgs/peliculas/3.jpg" >
                        </a>
                    </div>
                    
                    <div class="meta">
                    <a class="nombre" href="imgs/peliculas/3.jpg" title="Senderos de gloria">Senderos de gloria</a>
                    </div>
                    
                    
                </td>
                <!-- THE FRONT PAGE -->
                <td>
                    <div class="imagen" style="margin-bottom:5px;">
                        <a href="imgs/peliculas/1.jpg" title="The front page" alt="The front page">
                                <img class="card-img-top" src="imgs/peliculas/4.jpg" >
                        </a>
                    </div>
                    
                    <div class="meta">
                    <a class="nombre" href="imgs/peliculas/4.jpg" title="The front page">The front page</a>
                    </div>
                    
                    
                </td>
            </table>
            <?php
                
            ?>
        </div>
    </div>
</body>

</html>