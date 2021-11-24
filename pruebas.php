pruebas.php
<?php


    // Cargamos 10 juegos de ejemplo
    $coleccionJuegos[0]  = ["jugadorCruz"=> "majo" ,"jugadorCirculo" => "pepe","puntosCruz"=> 1,"puntosCirculo" => 1 ];
    $coleccionJuegos[1]  = ["jugadorCruz"=> "juan" ,"jugadorCirculo" => "pedro","puntosCruz"=> 4,"puntosCirculo" => 0 ];
    $coleccionJuegos[2]  = ["jugadorCruz"=> "fran" ,"jugadorCirculo" => "anibal","puntosCruz"=> 3,"puntosCirculo" => 0 ];
    $coleccionJuegos[3]  = ["jugadorCruz"=> "ramon" ,"jugadorCirculo" => "fran","puntosCruz"=> 0,"puntosCirculo" => 3 ];
    $coleccionJuegos[4]  = ["jugadorCruz"=> "jose" ,"jugadorCirculo" => "daniel","puntosCruz"=> 0,"puntosCirculo" => 4 ];
    $coleccionJuegos[5]  = ["jugadorCruz"=> "majo" ,"jugadorCirculo" => "pepe","puntosCruz"=> 1,"puntosCirculo" => 1 ];
    $coleccionJuegos[6]  = ["jugadorCruz"=> "juan" ,"jugadorCirculo" => "enzo","puntosCruz"=> 5,"puntosCirculo" => 0 ];
    $coleccionJuegos[7]  = ["jugadorCruz"=> "fran" ,"jugadorCirculo" => "ramon","puntosCruz"=> 4,"puntosCirculo" => 0 ];
    $coleccionJuegos[8]  = ["jugadorCruz"=> "jose" ,"jugadorCirculo" => "fran","puntosCruz"=> 3,"puntosCirculo" => 3 ];
    $coleccionJuegos[9]  = ["jugadorCruz"=> "pamela" ,"jugadorCirculo" => "daniel","puntosCruz"=> 0,"puntosCirculo" => 4 ];
    $coleccionJuegos[10] = ["jugadorCruz"=> "andres" ,"jugadorCirculo" => "anibal","puntosCruz"=> 0,"puntosCirculo" => 5 ];



        // sort($coleccionJuegos);
        $jugador0=$coleccionJuegos[$key]["jugadorCirculo"] ;
        foreach ($coleccionJuegos as $key => $valor) {
            foreach ($valor as $v) {
                echo$v;
                    if ($jugador0== $v) {
                        $datos= $jugador0 +$v;
                        sort($datos);
                        echo $datos;
                    }
            }
           
            
            
             
               
    }
    


        //  echo$jugadorO ."\n";
    // foreach ($coleccionJuegos as $key => $value) {
    //     foreach ($value as $nombres0) {
    //         echo $nombres0 . "\n";
    //             if ($nombres0 === $jugador0) {
    //                 echo $key;
    //             }

    //     }
    // }

/**for ($i=0; $i <count($coleccionJuegos) ; $i++) { 
    //var_dump($coleccionJuegos[$i]);
    for ($j=0; $j <count($coleccionJuegos[$i]) ; $j++) { 
       echo  $coleccionJuegos[$i][$j] ;
    }
}*/
/** 



 * Punto 7
 * a partir de una colección de juegos y el nombre de un jugador, retorna el resumen del jugador .
 * @param $array $juegosTotal
 * @return string $nombreJugador
 */
// function resumenJugador($juegosTotal,$nombreJugador)
// {
//array $resumen $valor
// $cruz=$juegosTotal[0]["jugadorCruz"];
// $cir= $juegosTotal[0]["jugadorCirculo"];
    //  if ($cruz == $nombreJugador || $cir == $nombreJugador) {
        //  echo "correcto \n";
    //  }
//      echo "****************************\n";
//     echo "Juego TATETI: " . $nombreJugador . " " .  "\n";
//     echo "Jugador X: " . $nombreX . " obtuvo " . $puntosX . "\n";
//     echo "Jugador O: " . $nombreO . " obtuvo " . $puntosO . "\n";
//     echo "****************************\n"; 
// }
    
//    }

// foreach ($coleccionJuegos as $key => $value) {
//     $nombres[$key]= $value["jugadorCruz"];
//     print_r($nombres);
// }

// function resumenJugador($juegosTotal,$nombreJugador){

//     //array $resumen 
//     if (array_search($nombreJugador,$juegosTotal) ) {
//          $resumen=$juegosTotal[$nombreJugador];
//         }
        
    

//    return $resumen; 
// }


// echo"nombre \n";
// $nom=trim(fgets(STDIN));

// $r= resumenJugador($coleccionJuegos,$nom);

// echo" $r. \n";



