<?php

    //Borramos una película
    function borrar_pelicula($file,$num){
        //Guardamos un array con los datos de las pelis
        $array_pelis = lee_y_devuelve_pelis();
        // variable que almacenará los datos del csv
        $result = "";
        //Recorremos el array con las pelis y guardamos en la variable todas menos la borrada
        for($h=0;$h<count($array_pelis); $h++){
            if($array_pelis[$h]["id"] != $num){
                $result .= "".$array_pelis[$h]["id"].",".$array_pelis[$h]["titulo"].",".$array_pelis[$h]["anyo"].",".$array_pelis[$h]["duracion"]."\n";
            }
        }

        // reabrimos en modo escritura
        $manejador = fopen($file, "w+");
        // escribimos el csv sin la peli borrada
        fwrite($manejador, $result);
        // cerramos el archivo
        fclose($manejador);
    }

    //Editamos una pelicula
    function editar_pelicula($file_pelis, $id, $titulo, $anyo, $duracion){
        //Guardamos un array con los datos de las pelis
        $array_pelis = lee_y_devuelve_pelis();
        // variable que almacenará los datos del csv
        $result = "";
        //Recorremos el array con las pelis y guardamos en la variable todas menos la editada, que la guardamos con los cambios
        for($h=0;$h<count($array_pelis); $h++){
            if($array_pelis[$h]["id"] != $id){
                $result .= "".$array_pelis[$h]["id"].",".$array_pelis[$h]["titulo"].",".$array_pelis[$h]["anyo"].",".$array_pelis[$h]["duracion"]."\n";
            }else{
                $result .= "".$id.",".$titulo.",".$anyo.",".$duracion."\n";
            }
        }

        // reabrimos en modo escritura
        $manejador = fopen($file_pelis, "w+");
        // escribimos el csv con la peli editada
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
        if (empty($array_pelis) != TRUE) {
            return $array_pelis;
        }
        else{
            return -1;
        }
    }

    //Devolvemos un array con todos los directores
    function tabla_directores(){
        $fichero = "bbdd/directores.csv";
        $array_directores;

        //Si existe el fichero lo abrimos para leerlo
        $manejador = fopen($fichero, "r");
        if($manejador != FALSE){
            $j=0;
            while(($arrayFila= fgetcsv($manejador, 1000, ",")) != FALSE){     
                $array_directores[$j]  = array("id" => $arrayFila[0], "nombre" => $arrayFila[1], "anyo" => $arrayFila[2], "lugar" => $arrayFila[3]);
                $j++;
            }          
            fclose($manejador);
        }       
            return $array_directores;
    }

    //Devolvemos un array con todos los actores
    function tabla_actores(){
        $fichero = "bbdd/actores.csv";
        $array_actores;

        //Si existe el fichero lo abrimos para leerlo
        $manejador = fopen($fichero, "r");
        if($manejador != FALSE){
            $j=0;
            while(($arrayFila= fgetcsv($manejador, 1000, ",")) != FALSE){     
                $array_actores[$j]  = array("id" => $arrayFila[0], "nombre" => $arrayFila[1], "anyo" => $arrayFila[2], "lugar" => $arrayFila[3]);
                $j++;
            }          
            fclose($manejador);
        }       
            return $array_actores;
    }

    //Devolvemos los directores de la película que le pasamos
    function getDirectores($id){
        //Sacamos un array con la relación pelis-directores
        $rel_pelis_dir = array();
        $directores_id = array();
        $directores = tabla_directores();
        $pelis_direc = pelis_dir();
        
        //Sacamos los id's de los directores de la peli introducida
        for($i=0; $i<count($pelis_direc); $i++){
            if(($pelis_direc[$i]["id_peli"]) == $id){
                $directores_id = array($pelis_direc[$i]['id_direc']);
            }
        }
        //Sacamos los datos de los directores de la peli introducida y lo devolvemos en un array
        for($j=0; $j<count($directores_id); $j++){
            for($i=0; $i<count($directores); $i++){
                if($directores[$i]['id'] == $directores_id[$j]){
                    $rel_pelis_dir = array($directores[$i]);
                }
            }
        }
        return $rel_pelis_dir;
    }

    //Devolvemos los acttores de la película que le pasamos
    function getActores($id){
        //Sacamos un array con la relación pelis-actores
        $rel_pelis_act = array();
        $actores_id = array();
        $actores = tabla_actores();
        $pelis_actor = pelis_act();
        
        //Sacamos los id's de los actores de la peli introducida
        for($i=0; $i<count($pelis_actor); $i++){
            if(($pelis_actor[$i]["id_peli"]) == $id){
                $actores_id[] = $pelis_actor[$i]['id_actor'];
            }
        }
        //Sacamos los datos de los actores de la peli introducida y lo devolvemos en un array
        for($j=0; $j<count($actores_id); $j++){
            for($i=0; $i<count($actores); $i++){
                if($actores[$i]['id'] == $actores_id[$j]){
                    $rel_pelis_act[] = $actores[$i];
                }
            }
        }
        return $rel_pelis_act;
    }

    //Devuelve array con la relación pelis-directores
    function pelis_dir(){
        $fichero = "bbdd/pelicula_director.csv";
        $array_peli_director;

        //Si existe el fichero lo abrimos para leerlo
        $manejador = fopen($fichero, "r");
        if($manejador != FALSE){
            $j=0;
            while(($arrayFila= fgetcsv($manejador, 1000, ",")) != FALSE){     
                $array_peli_director[$j]  = array("id_peli" => $arrayFila[0], "id_direc" => $arrayFila[1]);
                $j++;
            }          
            fclose($manejador);
        }       
            return $array_peli_director;
    }

    //Devuelve array con la relación pelis-actores
    function pelis_act(){
        $fichero = "bbdd/pelicula_actor.csv";
        $array_peli_actor;

        //Si existe el fichero lo abrimos para leerlo
        $manejador = fopen($fichero, "r");
        if($manejador != FALSE){
            $j=0;
            while(($arrayFila= fgetcsv($manejador, 1000, ",")) != FALSE){     
                $array_peli_actor[$j]  = array("id_peli" => $arrayFila[0], "id_actor" => $arrayFila[1]);
                $j++;
            }          
            fclose($manejador);
        }       
            return $array_peli_actor;
    }


?>
