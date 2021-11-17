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
    echo "****************************\n";
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
 * Retorna el resumen del jugador 
 * @param array $coleccionJuegos
 * @param string $nombreJugador
 * @return array
 */
function resumenJugador($coleccionJuegos, $nombreJugador)
{
    // int $i, $cantidadIndices, $ganados, $perdidos, $empatados, $puntos
    $i = 0;
    $cantidadIndices = count($coleccionJuegos);
    $resumenJugador = [
        "nombre" => $nombreJugador,
        "juegosGanados" => 0,
        "juegosPerdidos" => 0,
        "juegosEmpatados" => 0,
        "puntosAcumulados" => 0
    ];

    for ($i = 0; $i < $cantidadIndices; $i++) {
        // string $jugadorCruz, $jugadorCirculo
        // int $puntosCruz, $puntosCirculo
        $jugadorCruz = $coleccionJuegos[$i]["jugadorCruz"];
        $jugadorCirculo = $coleccionJuegos[$i]["jugadorCirculo"];
        $puntosCruz = $coleccionJuegos[$i]["puntosCruz"];
        $puntosCirculo = $coleccionJuegos[$i]["puntosCirculo"];

        // verifico si el jugador jugó esta partida
        if ($jugadorCruz === $nombreJugador || $jugadorCirculo === $nombreJugador) {

            // verifico si hay empate
            if ($puntosCruz === $puntosCirculo) {

                // sumo empatados y acumulo puntos
                $resumenJugador["juegosEmpatados"]++;
                $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosCruz;

                // verifico si es jugadorCruz
            } elseif ($jugadorCruz === $nombreJugador) {

                // verifico si jugadorCruz ganó
                if ($puntosCruz > $puntosCirculo) {

                    // sumo 1 a ganados y acumulo puntos
                    $resumenJugador["juegosGanados"]++;
                    $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosCruz;

                    // entonces perdió jugadorCruz 
                } else {

                    // sumo 1 a perdidos
                    $resumenJugador["juegosPerdidos"]++;
                }
                // jugador es jugadorCirculo
            } else {

                // verifico si jugadorCirculo ganó
                if ($puntosCirculo > $puntosCruz) {

                    // sumo 1 a ganados y acumulo puntos
                    $resumenJugador["juegosGanados"]++;
                    $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosCirculo;

                    // entonces perdió jugadorCirculo
                } else {

                    // sumo 1 a perdidos
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
    $eleccion = strtoupper(trim(fgets(STDIN)));
    // si el simbolo ingresado NO es igual a X o O consulto nuevamente 
    while (!($eleccion === "X" or $eleccion === "O")) {
        echo "Simbolo incorrecto, solo pueden ser Cruz (X) o Circulo (O): \n";
        $eleccion = strtoupper(trim(fgets(STDIN)));
    }
    // 
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
        $puntosX = isset($coleccionJuegos[$i]["puntosCruz"]) ? $coleccionJuegos[$i]["puntosCruz"] : "";
        $puntosO = isset($coleccionJuegos[$i]["puntosCirculo"]) ? $coleccionJuegos[$i]["puntosCirculo"] : "";

        if ($puntosX != $puntosO) {

            $juegosGanados++;
        }
    }
    return $juegosGanados;
}

/**
 * Punto 10
 * Verifica cuantos juegos ganó según X o O
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
 * Punto 11
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

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:
$juegosTotal = cargarJuegos();
$separador = "\n\n\n\n+++++++++++++++++++++++++++++++++\n";

//Proceso:

//print_r($juego);
//imprimirResultado($juego);



do {

    echo $separador;
    $opcion = seleccionarOpcion();


    switch ($opcion) {
        case 1:
            // 1) Jugar:
            $juego = jugar();
            $juegosTotal = agregarJuegos($juegosTotal, $juego);
            $indice = count($juegosTotal) - 1;
            mostrarJuego($juegosTotal, $indice);
            // print_r($indice);
            break;
        case 2:
            // 2) Mostrar un juego:
            echo "Ingresar el número de juego entre 0 y " . (count($juegosTotal) - 1) . "\n";
            $numero = numeroEntre(0, count($juegosTotal));
            mostrarJuego($juegosTotal, $numero);
            break;
        case 3:
            // 3) Mostrar el primer juego ganado:
            echo "Ingrese el nombre del jugador: \n";
            $nombreJugador = strtoupper(trim(fgets(STDIN)));
            $indicePrimerJuego = primerJuegoGanado($juegosTotal, $nombreJugador);
            if ($indicePrimerJuego != -1) {
                echo mostrarJuego($juegosTotal, $indicePrimerJuego);
            } else {
                echo "El jugador " . $nombreJugador . " no ganó ningún juego\n";
            }
            break;
        case 4:
            // 4) Mostrar porcentaje de Juegos ganados según el simbolo seleccionado:
            $simbolo = eleccionXO();
            $juegosGanados = juegosGanados($juegosTotal);

            $cantGanados = cantGanados($juegosTotal, $simbolo);
            $porcentajeGanados = $cantGanados * 100 / $juegosGanados;
            echo "El porcentaje de juegos ganados por " . $simbolo . " es del " . round($porcentajeGanados, 2) . "%.\n";
            break;
        case 5:
            // 5) Mostrar resumen de Jugador:
            echo "Ingrese el nombre del Jugador: ";
            $nombreJugador = strtoupper(trim(fgets(STDIN)));
            $resumen = resumenJugador($juegosTotal, $nombreJugador);

            if ($resumen["juegosPerdidos"] === 0 && $resumen["puntosAcumulados"] === 0) {
                echo "El jugador " . $nombreJugador . " no jugó ningún juego aún.\n";
            } else {

                echo "*************************************\n";
                echo "Jugador: " . $resumen["nombre"] . "\n";
                echo "Ganó: " . $resumen["juegosGanados"] . " juegos\n";
                echo "Perdió: " . $resumen["juegosPerdidos"] . " juegos\n";
                echo "Empató " . $resumen["juegosEmpatados"] . " juegos\n";
                echo "Total de puntos acumulados: " . $resumen["puntosAcumulados"] . " puntos\n";
                echo "*************************************\n";
            }
            break;
        case 6:
            // 6) Mostrar listado de juegos Ordenado por jugador O:
            ordenarColeccion($juegosTotal);
            break;
        case 7:
            // 7) Finalizar programa:
            echo "Programa finalizado....";
            break;
    }
} while ($opcion != 7);
