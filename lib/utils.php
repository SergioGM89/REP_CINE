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
                if ($num == ($i)) continue;
                // almacenamos los resultados
                $result .= $line;  
            }
            // cerramos el archivo
            fclose($manejador);
        } else {
          die("ups! no se pudo abrir el archivo {$file};");
        }

        // reabrimos en modo escritura
        $manejador = fopen($file, "w+");
        // escribimos el csv sin la peli borrada
        fwrite($manejador, $result);
        // cerramos el archivo
        fclose($manejador);
    }

    //Leemos el csv de películas y devolvemos el array con los datos
    function lee_y_devuelve_pelis(){
        $fichero = "bbdd/peliculas.csv";
        $array_pelis;

        //Si existe el fichero lo abrimos para leerlo
        $manejador = fopen($fichero, "r");
        if($manejador != FALSE){
            $j=0;
            while(($arrayFila= fgetcsv($manejador, 1000, ",")) != FALSE){     
                $array_pelis[$j]  = array("id" => $arrayFila[0], "titulo" => $arrayFila[1], "anyo" => $arrayFila[2], "duracion" => $arrayFila[3]);
                $j++;
            }          
            fclose($manejador);
        }
        return $array_pelis;
    }

?>
