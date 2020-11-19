<?php

    //Borramos una película
    function borrar_pelicula($peli){
        lee_peliculas(){

        }
    }

    //Leemos el csv de películas
    function lee_peliculas(){
        $fichero = "bbdd/peliculas.csv";

        //Si existe el fichero lo abrimos para leerlo
        $manejador = fopen($fichero, "r");
        if($manejador != FALSE){
            $arrayFila = fgetcsv($manejador, 1000, ",");
            while($arrayFila != FALSE){
                for($i=0; $i<count($arrayFila); $i++){

                }
            }
            fclose($manejador);
        }
    }

?>
