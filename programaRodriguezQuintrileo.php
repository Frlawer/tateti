<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* ... Rodriguez Francisco. FAI-1094. TDW. francisco.rodriguez@est.fi.uncoma.edu.ar. https://github.com/frlawer/ ... */
/*.....Quintrileo Ramon . FAI 3141 . TDW . ramon.quintrileo@est.fi.uncoma.edu.ar . https://github.com/ramonfi3141/...*/

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Punto 1
 * carga juegos
 * * Declara una coleccion multidimencional con juegos para usarse como ejemplo 
 * @param array $coleccionJuegos
 * @return array
 */
function cargarJuegos()
{
    // Cargamos 11 juegos de ejemplo
    $coleccionJuegos[0]  = ["jugadorCruz" => "MAJO", "jugadorCirculo" => "PEPE", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[1]  = ["jugadorCruz" => "JUAN", "jugadorCirculo" => "PEDRO", "puntosCruz" => 4, "puntosCirculo" => 0];
    $coleccionJuegos[2]  = ["jugadorCruz" => "FRAN", "jugadorCirculo" => "ANIBAL", "puntosCruz" => 3, "puntosCirculo" => 0];
    $coleccionJuegos[3]  = ["jugadorCruz" => "RAMON", "jugadorCirculo" => "FRAN", "puntosCruz" => 0, "puntosCirculo" => 3];
    $coleccionJuegos[4]  = ["jugadorCruz" => "JOSE", "jugadorCirculo" => "DANIEL", "puntosCruz" => 0, "puntosCirculo" => 4];
    $coleccionJuegos[5]  = ["jugadorCruz" => "MAJO", "jugadorCirculo" => "PEPE", "puntosCruz" => 1, "puntosCirculo" => 1];
    $coleccionJuegos[6]  = ["jugadorCruz" => "JUAN", "jugadorCirculo" => "ENZO", "puntosCruz" => 5, "puntosCirculo" => 0];
    $coleccionJuegos[7]  = ["jugadorCruz" => "FRAN", "jugadorCirculo" => "RAMON", "puntosCruz" => 4, "puntosCirculo" => 0];
    $coleccionJuegos[8]  = ["jugadorCruz" => "JOSE", "jugadorCirculo" => "FRAN", "puntosCruz" => 3, "puntosCirculo" => 3];
    $coleccionJuegos[9]  = ["jugadorCruz" => "PAMELA", "jugadorCirculo" => "DANIEL", "puntosCruz" => 0, "puntosCirculo" => 4];
    $coleccionJuegos[10] = ["jugadorCruz" => "ANDRES", "jugadorCirculo" => "ANIBAL", "puntosCruz" => 0, "puntosCirculo" => 5];


    return $coleccionJuegos;
}

/**
 * Punto 2
 * Muestra un menu con opciones y solicita al usuario que ingrese un numero entre las opciones y lo retorna.
 * @return int
 */
function seleccionarOpcion()
{
    // array $menu,
    // int $opcion
    // defino el menu como array
    $menu = [
        "1) Jugar Tateti",
        "2) Mostrar un juego",
        "3) Mostrar el primer juego ganado",
        "4) Mostrar porcentaje de Juegos ganados",
        "5) Mostrar resumen de Jugador",
        "6) Mostrar listado de juegos Ordenado por jugador O",
        "7) Salir"
    ];
    // imprimo el menu con bucle
    echo "Selecciona una opción del Menú: \n";
    foreach ($menu as $key) {
        echo $key . "\n";
    }
    // llamo a la funcion numeroEntre() para solicitar un numero y lo retorno.
    $opcion = numeroEntre(1, 7);
    return $opcion;
}

/**
 * Punto 3
 * Solicita un número en el rango [$min,$max]
 * @param int $min
 * @param int $max
 * @return int 
 */
function numeroEntre($min, $max)
{
    // retorno lo que la funcion solicitarNumeroEntre devuelva.
    return solicitarNumeroEntre($min, $max);
}

/**
 * Punto 4
 * Mostrar datos de un juego dado con formato 
 * ************************************
 * Juego TATETI: numeroPartido (empate)
 * Jugador X: nombreX obtuvo puntosX puntos.
 * Jugador O: nombreO obtuvo puntosO puntos.
 * ************************************
 * @param array $coleccionJuegos
 * @param int $numeroJuego
 */
function mostrarJuego($coleccionJuegos, $numeroJuego)
{
    // string $resultado,$nombreX, $nombreO
    // int $puntosCirculo, $puntosO
    // redefino variables para mas legibilidad
    $nombreX = strtoupper($coleccionJuegos[$numeroJuego]["jugadorCruz"]); //convierto a mayusculas
    $nombreO = strtoupper($coleccionJuegos[$numeroJuego]["jugadorCirculo"]); //convierto a mayusculas
    $puntosX = $coleccionJuegos[$numeroJuego]["puntosCruz"];
    $puntosO = $coleccionJuegos[$numeroJuego]["puntosCirculo"];

    // si son iguales es empate, sino asigno ganador a $resultado
    if ($puntosX == $puntosO) {
        $resultado = "(empate)";
    } elseif ($puntosX > $puntosO) {
        $resultado = "(ganó X)";
    } else {
        $resultado = "(ganó O)";
    }
    // imprimo el resultado del juego
    echo "****************************\n";
    echo "Juego TATETI: " . $numeroJuego . " " . $resultado . "\n";
    echo "Jugador X: " . $nombreX . " obtuvo " . $puntosX . "\n";
    echo "Jugador O: " . $nombreO . " obtuvo " . $puntosO . "\n";
    echo "****************************";
}


/**
 * Punto 5
 * Suma un juego a la coleccion de juegos ingresada por parametro
 * @param array $coleccionJuegos
 * @param array $nuevoJuego
 * @return array
 */
function agregarJuego($coleccionJuegos, $nuevoJuego)
{
    //array_push — Inserta uno o más elementos al final de un array
    array_push($coleccionJuegos, $nuevoJuego);
    return $coleccionJuegos;
}

/**
 * Punto 6
 * Retorna el indice del primer juego ganado por un jugador
 * @param array $coleccionJuegos
 * @param string $nombreJugador
 * @return int
 */
function primerJuegoGanado($coleccionJuegos, $nombreJugador)
{
    // int $indice, $cantidadIndices, $i, $puntosX, $puntosO
    // bool $esGanador
    // string $jugadorCruz, $jugadorCirculo,
    $indice = -1;
    $cantidadIndices = count($coleccionJuegos);
    $esGanador = false;
    $i = 0;
    while ($i < $cantidadIndices && !$esGanador) {
        // redefino variables para mayor legibilidad
        $jugadorX = strtoupper($coleccionJuegos[$i]["jugadorCruz"]);
        $jugadorO = strtoupper($coleccionJuegos[$i]["jugadorCirculo"]);
        $puntosX = $coleccionJuegos[$i]["puntosCruz"];
        $puntosO = $coleccionJuegos[$i]["puntosCirculo"];
        // Si jugador existe dentro de jugadorX o jugadorO
        if (isset($jugadorX) === is_string($nombreJugador) || isset($jugadorO) === is_string($nombreJugador)) {
            // evaluo si jugador es igual a jugadorX y si tiene más puntos
            if ($jugadorX === $nombreJugador && $puntosX > $puntosO) {
                // Ganó X, asigno al indice el valor del indice del array, modifico la variable bandera
                $indice = $i;
                $esGanador = true;
            } elseif ($jugadorO === $nombreJugador && $puntosX < $puntosO) {
                // Ganó O, asigno al indice el valor del indice del array, modifico la variable bandera
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
 * Retorna el resumen de partidas del jugador 
 * @param array $coleccionJuegos
 * @param string $nombreJugador
 * @return array
 */
function resumenJugador($coleccionJuegos, $nombreJugador)
{
    // $coleccionJuegos[4]  = ["jugadorCruz" => "JOSE", "jugadorCirculo" => "DANIEL", "puntosCruz" => 0, "puntosCirculo" => 4];

    // $coleccionJuegos[9]  = ["jugadorCruz" => "PAMELA", "jugadorCirculo" => "DANIEL", "puntosCruz" => 0, "puntosCirculo" => 4];

    // int $i, $cantidadIndices, $puntosX, $puntosO
    // array $resumenJugador
    // string $jugadorX, $jugadorO
    $cantidadIndices = count($coleccionJuegos);
    // defino el array resumenJugador con los indices para usarlos como variables contadoras, acumuladoras
    $resumenJugador = [
        "nombre" => "",
        "juegosGanados" => 0,
        "juegosPerdidos" => 0,
        "juegosEmpatados" => 0,
        "puntosAcumulados" => 0
    ];

    for ($i = 0; $i < $cantidadIndices; $i++) {
        // redefino variables para mayor legibilidad
        $jugadorX = $coleccionJuegos[$i]["jugadorCruz"];
        $jugadorO = $coleccionJuegos[$i]["jugadorCirculo"];
        $puntosX = $coleccionJuegos[$i]["puntosCruz"];
        $puntosO = $coleccionJuegos[$i]["puntosCirculo"];

        // verifico si el jugador jugó esta partida
        if ($jugadorX === $nombreJugador || $jugadorO === $nombreJugador) {

            // asigno $nombreJugador al indice "nombre"
            $resumenJugador["nombre"] = $nombreJugador;

            // verifico si hay empate
            if ($puntosX === $puntosO) {

                // sumo empatados y acumulo puntos
                $resumenJugador["juegosEmpatados"]++;
                $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosX;

                // verifico si ganó jugadorX
            } elseif ($puntosX > $puntosO) {
                // jugadorX es nombreJugador?
                if ($jugadorX === $nombreJugador) {
                    // ganó entonces sumo 1 juegosGanados y sumo los puntos
                    $resumenJugador["juegosGanados"]++;
                    $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosX;
                } else {
                    // perdió entonces sumo 1 a juegosPerdidos
                    $resumenJugador["juegosPerdidos"]++;
                }
                // Como ganó O verifico si nombreJugador es jugadorO
            } else {
                if ($jugadorO === $nombreJugador) {
                    // ganó entonces sumo 1 a juegosGanados y sumo los puntos
                    $resumenJugador["juegosGanados"]++;
                    $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosO;
                } else {
                    $resumenJugador["juegosPerdidos"]++;
                }
            }
        }
    }
    return $resumenJugador;
}

/**
 * Punto 8
 * Solicita X o O y lo retorna 
 * @return string 
 */
function eleccionXO()
{
    // string $eleccion
    echo "Ingrese un simbolo: Cruz (X) o Circulo (O): \n";
    // convierto a mayusculas lo que ingresa por teclado
    $eleccion = strtoupper(trim(fgets(STDIN)));
    // si el simbolo ingresado NO es igual a X o O consulto nuevamente 
    while (!($eleccion === "X" || $eleccion === "O")) {
        echo "Simbolo incorrecto, solo pueden ser Cruz (X) o Circulo (O): \n";
        // convierto a mayusculas lo que ingresa por teclado
        $eleccion = strtoupper(trim(fgets(STDIN)));
    }
    return $eleccion;
}

/**
 * Punto 9
 * Retorna la cantidad de juegos ganados
 * @param array $coleccionJuegos
 * @return int 
 */
function juegosGanados($coleccionJuegos)
{
    // int $cantidadIndices, $juegosGanados
    $cantidadIndices = count($coleccionJuegos);
    $juegosGanados = 0;
    for ($i = 0; $i <= $cantidadIndices; $i++) {

        // redefino variables para mayor legibilidad
        $puntosX = isset($coleccionJuegos[$i]["puntosCruz"]) ? $coleccionJuegos[$i]["puntosCruz"] : "";
        $puntosO = isset($coleccionJuegos[$i]["puntosCirculo"]) ? $coleccionJuegos[$i]["puntosCirculo"] : "";

        // Si no hay empate
        if ($puntosX != $puntosO) {

            // sumo 1 a juegosGanados 
            $juegosGanados++;
        }
    }
    return $juegosGanados;
}

/**
 * Punto 10
 * Verifica cuantos juegos ganó el simbolo ingresado por parametro
 * @param array $coleccionJuegos
 * @param string $simbolo
 * @return int
 */
function cantGanados($coleccionJuegos, $simbolo)
{
    // int $juegosGanados, $puntos, $puntosOpuesto
    // string $simbolo, $simboloOpuesto
    $juegosGanados = 0;

    if (strtoupper($simbolo) === "X") {
        $simbolo = "Cruz";
        $simboloOpuesto = "Circulo";
    } else {
        $simbolo = "Circulo";
        $simboloOpuesto = "Cruz";
    }

    for ($i = 0; $i < count($coleccionJuegos); $i++) {
        if (!(empty($coleccionJuegos[$i]["puntos" . $simbolo]) === empty($coleccionJuegos[$i]["puntos" . $simboloOpuesto]))) {

            $puntos = $coleccionJuegos[$i]["puntos" . $simbolo];
            $puntosOpuesto = $coleccionJuegos[$i]["puntos" . $simboloOpuesto];

            if ($puntos > $puntosOpuesto) {
                $juegosGanados++;
            }
        }
    }
    return $juegosGanados;
}

/**
 * Punto 11 - funcion de comparación
 * Compara de a 2 claves para determinar cual es mayor 
 * @param string $a
 * @param string $b
 * @return int
 */
function comparar($a, $b)
{
    if ($a["jugadorCirculo"] == $b["jugadorCirculo"]) {
        return 0;
    }
    return ($a["jugadorCirculo"] < $b["jugadorCirculo"]) ? -1 : 1;
}

/**
 * Punto 11 - funcion que ordena
 * Muestra los juegos ordenados por nombre jugador O 
 * @param array $coleccionJuegos)
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

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
// array $juegosTotal, $juego, $resumen
// string $separador, $nombreJugador, $simbolo
// int $indice, $numero, $indicePrimerJuego, $juegosGanados, $cantGanados 
// float $porcentajeGanados,
//Inicialización de variables:

$juegosTotal = cargarJuegos();
$separador = "\n----------------------------------\n";
//Proceso:

do {
    echo $separador;
    // invoco funcion para mostrar menu y solicitar ingrese una opcion del mismo
    $opcion = seleccionarOpcion();

    switch ($opcion) {
        case 1:
            //opción 1) Jugar:
            $juego = jugar();
            // agrego el juego a la coleccion $juegosTotal
            $juegosTotal = agregarJuego($juegosTotal, $juego);
            // defino la variable indice que cuenta cuantos juegos hay guardados en $juegosTotal y le resto -1 para que sea exacto el indice de la coleccion a la que pertenece el juego
            $indice = count($juegosTotal) - 1;
            // muestro el resultado del juego 
            mostrarJuego($juegosTotal, $indice);
            echo $separador;
            break;
        case 2:
            // 2) Mostrar un juego:
            echo "Ingresar el número de juego entre 0 y " . (count($juegosTotal) - 1) . "\n";
            // asigno a $numero el numero seleccionado por el usuario
            $numero = numeroEntre(0, count($juegosTotal) - 1);
            // muestro el resultado del juego solicitado
            mostrarJuego($juegosTotal, $numero);
            echo $separador;
            break;
        case 3:
            // 3) Mostrar el primer juego ganado:
            echo "Ingrese el nombre del jugador: \n";
            // asigno a $nombreJugador lo ingresado por teclado y lo convierto a mayusculas
            $nombreJugador = strtoupper(trim(fgets(STDIN)));
            // asigno a $indicePrimerJuego el return  de la funcion primerJuegoGanado
            $indicePrimerJuego = primerJuegoGanado($juegosTotal, $nombreJugador);

            // Si es diferente a -1 muestro el juego
            if ($indicePrimerJuego != -1) {
                echo mostrarJuego($juegosTotal, $indicePrimerJuego);
                echo $separador;
            } else {
                // Muestro que el jugador no existe en la coleccion de juegos 
                echo "El jugador " . $nombreJugador . " no ganó ningún juego";
                echo $separador;
            }
            break;
        case 4:
            //opción 4) Mostrar porcentaje de Juegos ganados segun simbolo:
            $simbolo = eleccionXO();
            // asigno a $juegosGanados el retorno de la funcion juegosGanados
            $juegosGanados = juegosGanados($juegosTotal);
            // asigno a $cantGanados la cantidad de juegos ganados por el simbolo ingresado por el usuario
            $cantGanados = cantGanados($juegosTotal, $simbolo);
            // calculo el porcentaje y lo asigno a $porcentajeGanados
            $porcentajeGanados = $cantGanados * 100 / $juegosGanados;
            // muestro por pantalla el resultado del porcentaje
            echo "El porcentaje de juegos ganados por " . $simbolo . " es del " . round($porcentajeGanados, 2) . "%.";
            echo $separador;
            break;
        case 5:
            //opción 5) Mostrar resumen de Jugador:
            echo "Ingrese el nombre del Jugador: ";
            // asigno a $nombreJugador lo ingresado por teclado y lo convierto a mayusculas
            $nombreJugador = strtoupper(trim(fgets(STDIN)));
            // asigno a $resumen el retorno de la funcion resumenJugador
            $resumen = resumenJugador($juegosTotal, $nombreJugador);

            // Si el jugador no perdió ni tiene puntos significa que no jugo nunca.
            if ($resumen["juegosPerdidos"] === 0 && $resumen["puntosAcumulados"] === 0) {
                echo "El jugador " . $nombreJugador . " no jugó ningún juego aún." . $separador;
            } else {

                echo "*************************************\n";
                echo "Jugador: " . $resumen["nombre"] . "\n";
                echo "Ganó: " . $resumen["juegosGanados"] . " juegos\n";
                echo "Perdió: " . $resumen["juegosPerdidos"] . " juegos\n";
                echo "Empató " . $resumen["juegosEmpatados"] . " juegos\n";
                echo "Total de puntos acumulados: " . $resumen["puntosAcumulados"] . " puntos\n";
                echo "*************************************" . $separador;
            }
            break;
        case 6:
            //opción 6) Mostrar listado de juegos Ordenado por jugador O:
            ordenarColeccion($juegosTotal);
            echo $separador;
            break;
        case 7:
            //opción 6) Mostrar listado de juegos Ordenado por jugador O:
            echo "Programa finalizado...." . $separador;
            break;
    }
} while ($opcion != 7);
