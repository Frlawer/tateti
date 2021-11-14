<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... Rodriguez Francisco. FAI-1094. TDW. francisco.rodriguez@est.fi.uncoma.edu.ar. https://github.com/frlawer/ ... */
/*.....Quintrileo Ramon . FAI 3141 . TDW . ramon.quintrileo@est.fi.uncoma.edu.ar . https://github.com/ramonfi3141/...*/

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Punto 1
 * carga una coleccion de juegos para usar en el programa
 * @param array $coleccionJuegos
 * @return array
 */
function cargarJuegos()
{
    // Cargamos 10 juegos de ejemplo
    $coleccionJuegos[0]  = ["jugadorCruz"=> "MAJO" ,"jugadorCirculo" => "PEPE","puntosCruz"=> 1,"puntosCirculo" => 1 ];
    $coleccionJuegos[1]  = ["jugadorCruz"=> "JUAN" ,"jugadorCirculo" => "PEDRO","puntosCruz"=> 4,"puntosCirculo" => 0 ];
    $coleccionJuegos[2]  = ["jugadorCruz"=> "FRAN" ,"jugadorCirculo" => "ANIBAL","puntosCruz"=> 3,"puntosCirculo" => 0 ];
    $coleccionJuegos[3]  = ["jugadorCruz"=> "RAMON" ,"jugadorCirculo" => "FRAN","puntosCruz"=> 0,"puntosCirculo" => 3 ];
    $coleccionJuegos[4]  = ["jugadorCruz"=> "JOSE" ,"jugadorCirculo" => "DANIEL","puntosCruz"=> 0,"puntosCirculo" => 4 ];
    $coleccionJuegos[5]  = ["jugadorCruz"=> "MAJO" ,"jugadorCirculo" => "PEPE","puntosCruz"=> 1,"puntosCirculo" => 1 ];
    $coleccionJuegos[6]  = ["jugadorCruz"=> "JUAN" ,"jugadorCirculo" => "ENZO","puntosCruz"=> 5,"puntosCirculo" => 0 ];
    $coleccionJuegos[7]  = ["jugadorCruz"=> "FRAN" ,"jugadorCirculo" => "RAMON","puntosCruz"=> 4,"puntosCirculo" => 0 ];
    $coleccionJuegos[8]  = ["jugadorCruz"=> "JOSE" ,"jugadorCirculo" => "FRAN","puntosCruz"=> 3,"puntosCirculo" => 3 ];
    $coleccionJuegos[9]  = ["jugadorCruz"=> "PAMELA" ,"jugadorCirculo" => "DANIEL","puntosCruz"=> 0,"puntosCirculo" => 4 ];
    $coleccionJuegos[10] = ["jugadorCruz"=> "ANDRES" ,"jugadorCirculo" => "ANIBAL","puntosCruz"=> 0,"puntosCirculo" => 5 ];

    return $coleccionJuegos;
    
}

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
 * Implementar una función que solicite al usuario un número entre un rango de valores.Si el número ingresado por el usuario no es válido, la función se encarga de volver a pedirlo.La función retorna un número válido.
 * @param int $min
 * @param int $max
 * @return int
 */
function numeroEntre($min,$max)
{
   //se invoca a la funcion  solicitarNumeroEntre  de tateti que cumple con esta tarea
   return solicitarNumeroEntre($min,$max);

}

 /**
 * Punto 4
 * Imprime el resultado de un juego
 * @param array $juegosTotal
 * @param int $numeroJuego
 */
function mostrarJuego($juegosTotal, $numeroJuego)
{
    // array $datosJuego,
    // string $resultado, $ganador
    // int $puntosCruz, $puntosCirculo
    // redefino variables para mas legibilidad
    $nombreX = strtoupper($juegosTotal[$numeroJuego]["jugadorCruz"]);
    $nombreO = strtoupper($juegosTotal[$numeroJuego]["jugadorCirculo"]);
    $puntosX = $juegosTotal[$numeroJuego]["puntosCruz"];
    $puntosO = $juegosTotal[$numeroJuego]["puntosCirculo"];

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
 * .modifica la coleccion de juegos sumando un juego nuevo
 * @param array $nuevoJuego
 * @return array
 */
function agregarJuegos($juegosTotal, $nuevoJuego)
{
    //array_push — Inserta uno o más elementos al final de un array
    array_push($juegosTotal, $nuevoJuego);
    return $juegosTotal;
}

 /**
 * Punto 6
 * Retorna el indice del primer juego ganado por un jugador
 * @param array $juegosTotal
 * @param string $nombreJugador
 * @return int
 */
function primerJuegoGanado($juegosTotal, $nombreJugador)
{
    // int $indice, $cantidadIndices, $i
    // bool $esGanador
    $indice = -1;
    $cantidadIndices = count($juegosTotal);
    $esGanador = false;
    $i = 0;
    while ($i < $cantidadIndices && !$esGanador) {
        // string $jugadorCruz, $jugadorCirculo,
        // int $puntosCruz, $puntosCirculo
        $jugadorX = strtoupper($juegosTotal[$i]["jugadorCruz"]);
        $jugadorO = strtoupper($juegosTotal[$i]["jugadorCirculo"]);
        $puntosX = $juegosTotal[$i]["puntosCruz"];
        $puntosO = $juegosTotal[$i]["puntosCirculo"];

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
  * Solicita X o O y lo retorna 
  * @return string 
  */
function eleccionXO()
{
    // string $eleccion
    echo "Ingrese un simbolo: Cruz (X) o Circulo (O): \n";
    $eleccion = strtoupper(trim(fgets(STDIN)));
    // si el simbolo ingresado NO es igual a X o O consulto nuevamente 
    while(!($eleccion === "X" or $eleccion === "O")){
        echo "Simbolo incorrecto, solo pueden ser Cruz (X) o Circulo (O): \n";
        $eleccion = strtoupper(trim(fgets(STDIN)));
    }
    // 
    return $eleccion;
}

/**
 * Punto 9
 * Que hace?
 * @param mixed $var
 * @return mixed
 */

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
    }else {
        $simbolo = "Circulo";
        $simboloOpuesto = "Cruz";
    }

    for ($i=0; $i < count($coleccionJuegos); $i++) { 
        if (!(empty($coleccionJuegos[$i]["puntos".$simbolo]) === empty($coleccionJuegos[$i]["puntos".$simboloOpuesto]))) {
            
            $puntos = $coleccionJuegos[$i]["puntos".$simbolo];
            $puntosOpuesto = $coleccionJuegos[$i]["puntos".$simboloOpuesto];

            if ($puntos > $puntosOpuesto) {
                $juegosGanados++;
            }
        }
    }
    return $juegosGanados;
}

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
$juegosTotal = cargarJuegos();

//Proceso:

//print_r($juego);
//imprimirResultado($juego);



do {
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
            echo "Ingresar el número de juego entre 0 y ".(count($juegosTotal)-1)."\n";
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
            }else{
                echo "El jugador " . $nombreJugador . " no ganó ningún juego\n";
            }
            break;
        case 4:
            // 4) Mostrar porcentaje de Juegos ganados según el simbolo seleccionado:
            $simbolo = eleccionXO();
            
            break;
        case 5:
            // 5) Mostrar resumen de Jugador:

            break;
        case 6:
            // 6) Mostrar listado de juegos Ordenado por jugador O:

            break;
        case 7:
            // 7) Finalizar programa:

            break;
    }
} while ($opcion != 7);