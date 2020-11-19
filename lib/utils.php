<?php

    //Borramos una película
    function borrar_pelicula($file,$num){
        //leemos el archivo 
        $manejador = fopen($file, "r");
        // variable que almacenará los datos del csv
        $result = "";
        // contador de líneas
        $i =0;
        if ($manejador) {
            while (($line = fgets($manejador)) !== false) {
                // aumentamos en 1 la linea
                $i++;
                // validamos que sea el número de linea especificado y saltamos a la siguiente interacción
                if ($num == ($i -1)) continue;
                // almacenamos los resultados
                $result .= $line."\n";  
            }
            // cerramos el archivo
            fclose($manejador);
        } else {
          die("ups! no se pudo abrir el arcivo {$file};");
        }

        // reabrimos en modo escritura
        $manejador = fopen($file, "w+");
        // escribimos el csv sin la peli borrada
        fwrite($manejador, $result);
        // cerramos el archivo
        fclose($manejador);
    }

    //Leemos el csv de películas
    function lee_y_devuelve_pelis(){
        $fichero = "bbdd/peliculas.csv";
        $array_pelis = array();

        //Si existe el fichero lo abrimos para leerlo
        $manejador = fopen($fichero, "r");
        if($manejador != FALSE){
            while($arrayFila= fgetcsv($manejador, 1000, ",") != FALSE){
                for($i=0; $i<count($arrayFila); $i++){
                    $array_pelis.push($arrayFila);
                }
            }
            fclose($manejador);
        }
    }

?>
