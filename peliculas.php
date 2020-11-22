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
                print_r($array_peliculas);
            ?>
            <table>
            <!-- EL PADRINO -->
				<td>
                    <div class="card" style="margin-bottom:5px;">
                        <a class="custom-card" href="imgs/peliculas/1.jpg" title="El padrino" alt="El padrino">
                                <img class="card-img-top" src="imgs/peliculas/1.jpg" >		
                        </a>
                    </div>
                    
                    <div class="card-body">
                    <a class="nombre" style="font-weight: bold;color: black" href="imgs/peliculas/1.jpg" title="El padrino">El padrino</a>
                    </div>
                    <table>
                    <td>
                    <div>
                        <form class="boton_editar" method="post" action="peliculas_form.php">
                        <div class="editar"><input class="btn btn-primary" type="submit" value="Editar" name="edita1"></div>
                    </form>
                    </div>
                    </td>

                    <td>
                    <div>
                        <form class="boton_borrar" method="post" action="peliculas_borrado.php">
                        <div class="borrar"><input class="btn btn-danger" type="submit" value="Borrar" name="borra1"></div>
                        </form>
                    </div>
                    </td>
                    </table>
                    
                </td>
                <!-- EL PADRINO II -->
                <td>
                    <div class="card" style="margin-bottom:5px;">
                        <a class="custom-card" href="imgs/peliculas/1.jpg" title="El padrino 2" alt="El padrino 2">
                                <img class="card-img-top" src="imgs/peliculas/2.jpg" >
                        </a>
                    </div>
                    
                    <div class="card-body">
                    <a class="nombre" style="font-weight: bold;color: black" href="imgs/peliculas/2.jpg" title="El padrino 2">El padrino II</a>
                    </div>
                    <table>
                    <td>
                    <div>
                        <form class="boton_editar" method="post" action="peliculas_form.php">
                        <div class="editar"><input class="btn btn-primary" type="submit" value="Editar" name="edita2"></div>
                    </form>
                    </div>
                    </td>

                    <td>
                    <div>
                        <form class="boton_borrar" method="post" action="peliculas_borrado.php">
                        <div class="borrar"><input class="btn btn-danger" type="submit" value="Borrar" name="borra2"></div>
                        </form>
                    </div>
                    </td>
                    </table>
                    
                    
                </td>
                <!-- SENDEROS DE GLORIA -->
                <td>
                    <div class="card" style="margin-bottom:5px;">
                        <a class="custom-card" href="imgs/peliculas/1.jpg" title="Senderos de gloria" alt="Senderos de gloria">
                                <img class="card-img-top" src="imgs/peliculas/3.jpg" >
                        </a>
                    </div>
                    
                    <div class="card-body">
                    <a class="nombre" style="font-weight: bold;color: black" href="imgs/peliculas/3.jpg" title="Senderos de gloria">Senderos de gloria</a>
                    </div>
                    <table>
                    <td>
                    <div>
                        <form class="boton_editar" method="post" action="peliculas_form.php">
                        <div class="editar"><input class="btn btn-primary" type="submit" value="Editar" name="edita3"></div>
                    </form>
                    </div>
                    </td>

                    <td>
                    <div>
                        <form class="boton_borrar" method="post" action="peliculas_borrado.php">
                        <div class="borrar"><input class="btn btn-danger" type="submit" value="Borrar" name="borra3"></div>
                        </form>
                    </div>
                    </td>
                    </table>
                    
                </td>
                <!-- THE FRONT PAGE -->
                <td>
                    <div class="card" style="margin-bottom:5px;">
                        <a class="custom-card" href="imgs/peliculas/1.jpg" title="The front page" alt="The front page">
                                <img class="card-img-top" src="imgs/peliculas/4.jpg" >
                        </a>
                    </div>
                    
                    <div class="card-body">
                    <a class="nombre" style="font-weight: bold;color: black" href="imgs/peliculas/4.jpg" title="The front page">The front page</a>
                    </div>
                    <table>
                    <td>
                    <div>
                        <form class="boton_editar" method="post" action="peliculas_form.php">
                        <div class="editar"><input class="btn btn-primary" type="submit" value="Editar" name="edita4"></div>
                    </form>
                    </div>
                    </td>

                    <td>
                    <div>
                        <form class="boton_borrar" method="post" action="peliculas_borrado.php">
                        <div class="borrar"><input class="btn btn-danger" type="submit" value="Borrar" name="borra4"></div>
                        </form>
                    </div>
                    </td>
                    </table>
                    
                </td>
            </table>
            <?php
                
            ?>
        </div>
    </div>
</body>

</html>