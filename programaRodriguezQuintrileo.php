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
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

 /**
 * Punto 5
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

 /**
 * Punto 6
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

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