<?php


/**
 * Punto 1
 * carga juegos
 * * Declara una coleccion multidimencional con juegos para usarse como ejemplo 
 * @param array $coleccionJuegos
 * @return array
 */
function cargarJuegos()
{
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
    

 return $coleccionJuegos;
}


/**
 * Punto 11 - funcion de comparación
 * Compara de a 2 claves para determinar cual es mayor 
 * @param string $a
 * @param string $b
 * @return int
 */ 
function comparar($a, $b) {
    if ($a["jugadorCirculo"] == $b["jugadorCirculo"]) {
        $orden= 0;
    }
    elseif (($a["jugadorCirculo"] < $b["jugadorCirculo"])) {
        $orden=-1;
    } else {
        $orden=1;
    }
    return $orden;
}
 /* Punto 11
 * Muestra la cantidad de juegos ordenados por nombre jugador O 
 * @param array $coleccionJuegos)
 * @return array
 */ 
function ordenarColeccion($coleccionJuegos)
{
    //Esta función ordena un array tal que los índices de array mantienen sus correlaciones 
    // con los elementos del array con los que están asociados, 
    // usando una función de comparación definida por el usuario.
    uasort($coleccionJuegos, 'comparar');
    //  muestra información sobre una variable en una forma que es legible por humanos
    print_r($coleccionJuegos);
}
$juegosTotal = cargarJuegos();
ordenarColeccion($juegosTotal);

/**
 * Punto 11 - funcion de comparación
 * Compara de a 2 claves para determinar cual es mayor 
 * @param string $a
 * @param string $b
 * @return int
 */ 
/*
function comparar($a, $b) {
    if ($a["jugadorCirculo"] == $b["jugadorCirculo"]) {
        return 0;
    }
    return ($a["jugadorCirculo"] < $b["jugadorCirculo"]) ? -1 : 1;
}*/
