<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... Rodriguez Francisco. FAI-1094. TDW. francisco.rodriguez@est.fi.uncoma.edu.ar. https://github.com/frlawer/ ... */





/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Punto 1
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

 /**
 * Punto 2
 * Muestra el menu y retorna la opcion seleccionada
 * @return int
 */
function seleccionarOpcion()
{
    // array $menu,
    // int $opcion
    // inicio una array $menu donde están todas las opciones
    $menu = [
        "1) Jugar Tateti",
        "2) Mostrar un juego",
        "3) Mostrar el primer juego ganado",
        "4) Mostrar porcentaje de Juegos ganados",
        "5) Mostrar resumen de Jugador",
        "6) Mostrar listado de juegos Ordenado por jugador O",
        "7) Salir"
    ];
    echo "Selecciona una opción del Menú: \n";
    foreach ($menu as $key ) {
        echo $key . "\n";
    }
    
    // solicito que ingrese una opcion entre 1 y 7 usando la funcion del archivo tateti.php
    $opcion = solicitarNumeroEntre(1,7);
    return $opcion;
}

 /**
 * Punto 3
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

 /**
 * Punto 4
 * Imprime el resultado de un juego
 * @param int $numeroJuego
 */
function mostrarJuego($numeroJuego)
{
    // array $datosJuego,
    // string $resultado, $ganador
    // int $puntosCruz, $puntosCirculo
    // redefino variables para mas legibilidad
    $datosJuego = $coleccionJuegos[$numeroJuego];

    $nombreX = $datosJuego["jugadorCruz"];
    $nombreO = $datosJuego["jugadorCirculo"];
    $puntosX = $datosJuego["puntosCruz"];
    $puntosO = $datosJuego["puntosCirculo"];

    // si son iguales es empate, sino asigno ganador a $resultado
    if ($puntosX == $puntosO) {
        $resultado = "(empate)";
    }elseif ($puntosX > $puntosO) {
        $resultado = "(ganó X)";
    }else {
        $resultado = "(ganó O)";
    }
    // imprimo el resultado del juego
    echo "****************************\n";
    echo "Juego TATETI: " . $numeroJuego . " " . $resultado . "\n";
    echo "Jugador X: " . $nombreX . " obtuvo " . $puntosX . "\n";
    echo "Jugador O: " . $nombreO . " obtuvo " . $puntosO . "\n";
    echo "****************************\n"; 
}

 /**
 * Punto 5
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

 /**
 * Punto 6
 * Retorna el indice del primer juego ganado por un jugador
 * @param string $nombreJugador
 * @return int
 */
function primerJuegoGanador($nombreJugador)
{
    // int $indice, $cantidadIndices, $i
    // bool $esGanador
    $indice = -1;
    $cantidadIndices = count($coleccionJuegos);
    $esGanador = false;
    $i = 0;
    while ($i < $cantidadIndices && !$esGanador) {
        // string $jugadorCruz, $jugadorCirculo,
        // int $puntosCruz, $puntosCirculo
        $jugadorX = $coleccionJuegos[$i]["jugadorCruz"];
        $jugadorO = $coleccionJuegos[$i]["jugadorCirculo"];
        $puntosX = $coleccionJuegos[$i]["puntosCruz"];
        $puntosO = $coleccionJuegos[$i]["puntosCirculo"];

        if (isset($jugadorX) === is_string($nombreJugador) || isset($jugadorO) === is_string($nombreJugador)) {
            
            if ($jugadorX === $nombreJugador && $puntosX > $puntosO) {
                // Ganador X
                $indice = $i;
                $esGanador = true;
            }elseif ($jugadorO === $nombreJugador && $puntosX < $puntosO) {
                // Ganador O
                $indice = $i;
                $esGanador = true;
            }
        }
        $i++;
    }
    return $indice;
}

/**
 * Punto 7
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

 /**
 * Punto 8
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

/**
 * Punto 9
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

 /**
 * Punto 10
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

 /**
 * Punto 11
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:
$coleccionJuegos = cargarJuegos();
//Proceso:

// $juego = jugar();
//print_r($juego);
//imprimirResultado($juego);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/