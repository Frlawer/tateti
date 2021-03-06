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
    
    $CAMBIAR_POR_NOMBRE_COLECCION = [];

$jg1 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 1, "puntosCirculo" => 1];
$jg2 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "AMARILIS", "puntosCruz" => 3, "puntosCirculo" => 0];
$jg3 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "MILOS",    "puntosCruz" => 0, "puntosCirculo" => 4];
$jg4 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
$jg5 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 5, "puntosCirculo" => 0];
$jg6 = ["jugadorCruz" => "FEDORA",   "jugadorCirculo" => "CALIXTO",  "puntosCruz" => 0, "puntosCirculo" => 3];
$jg7 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "AMARILIS", "puntosCruz" => 4, "puntosCirculo" => 0];
$jg8 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
$jg9 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "FEDORA",   "puntosCruz" => 2, "puntosCirculo" => 0];
$jg10= ["jugadorCruz" => "MILOS",    "jugadorCirculo" => "ZENDA",   "puntosCruz" => 1, "puntosCirculo" => 1];

array_push($CAMBIAR_POR_NOMBRE_COLECCION, $jg1, $jg2, $jg3, $jg4, $jg5, $jg6, $jg7, $jg8, $jg9, $jg10);


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
    // inicio una array $menu donde est??n todas las opciones
    $menu = [
        "1) Jugar Tateti",
        "2) Mostrar un juego",
        "3) Mostrar el primer juego ganado",
        "4) Mostrar porcentaje de Juegos ganados",
        "5) Mostrar resumen de Jugador",
        "6) Mostrar listado de juegos Ordenado por jugador O",
        "7) Salir"
    ];
    echo "Selecciona una opci??n del Men??: \n";
    foreach ($menu as $key ) {
        echo $key . "\n";
    }
    
    // solicito que ingrese una opcion entre 1 y 7 usando la funcion del archivo tateti.php
    $opcion = solicitarNumeroEntre(1,7);
    return $opcion;
}

 /**
 * Punto 3
 * Implementar una funci??n que solicite al usuario un n??mero entre un rango de valores.Si el n??mero ingresado por el usuario no es v??lido, la funci??n se encarga de volver a pedirlo.La funci??n retorna un n??mero v??lido.
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
 * Mostrar datos de un juego dado con formato 
 * ************************************
 * Juego TATETI: 12 (empate)
 * Jugador X: majo obtuvo 1 puntos.
 * Jugador O: pepe obtuvo 1 puntos.
 * ************************************
 * @param array $juegosTotal
 * @param int $numeroJuego
 */
function mostrarJuego($juegosTotal, $numeroJuego)
{
    // array $datosJuego,
    // string $resultado, $ganador
    // int $puntosCruz, $puntosCirculo
    // redefino variables para mas legibilidad
    //strtoupper ??? Convierte un string a may??sculas
    $nombreX = strtoupper($juegosTotal[$numeroJuego]["jugadorCruz"]);
    $nombreO = strtoupper($juegosTotal[$numeroJuego]["jugadorCirculo"]);
    $puntosX = $juegosTotal[$numeroJuego]["puntosCruz"];
    $puntosO = $juegosTotal[$numeroJuego]["puntosCirculo"];

    // si son iguales es empate, sino asigno ganador a $resultado
    if ($puntosX == $puntosO) {
        $resultado = "(empate)";
    }elseif ($puntosX > $puntosO) {
        $resultado = "(gan?? X)";
    }else {
        $resultado = "(gan?? O)";
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
    //array_push ??? Inserta uno o m??s elementos al final de un array
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

    for ($i=0; $i < $cantidadIndices; $i++) { 
        // string $jugadorCruz, $jugadorCirculo
        // int $puntosCruz, $puntosCirculo
        $jugadorCruz = $coleccionJuegos[$i]["jugadorCruz"];
        $jugadorCirculo = $coleccionJuegos[$i]["jugadorCirculo"];
        $puntosCruz = $coleccionJuegos[$i]["puntosCruz"];
        $puntosCirculo = $coleccionJuegos[$i]["puntosCirculo"];
        
        // verifico si el jugador jug?? esta partida
        if ($jugadorCruz === $nombreJugador || $jugadorCirculo === $nombreJugador) {
            
            // verifico si hay empate
            if ($puntosCruz === $puntosCirculo) {

                // sumo empatados y acumulo puntos
                $resumenJugador["juegosEmpatados"]++;
                $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosCruz;
                
            // verifico si es jugadorCruz
            }elseif ($jugadorCruz === $nombreJugador) {
                
                // verifico si jugadorCruz gan??
                if ($puntosCruz > $puntosCirculo) {
                    
                    // sumo 1 a ganados y acumulo puntos
                    $resumenJugador["juegosGanados"]++;
                    $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosCruz;
                    
                // entonces perdi?? jugadorCruz 
                }else{

                    // sumo 1 a perdidos
                    $resumenJugador["juegosPerdidos"]++;

                }
            // jugador es jugadorCirculo
            }else{
                
                // verifico si jugadorCirculo gan??
                if($puntosCirculo > $puntosCruz){
                    
                    // sumo 1 a ganados y acumulo puntos
                    $resumenJugador["juegosGanados"]++;
                    $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosCirculo;

                // entonces perdi?? jugadorCirculo
                }else {

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
    while(!($eleccion === "X" or $eleccion === "O")){
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
    for($i=0; $i <= $cantidadIndices; $i++){
        $puntosX = isset($coleccionJuegos[$i]["puntosCruz"]) ? $coleccionJuegos[$i]["puntosCruz"] : "";
        $puntosO = isset($coleccionJuegos[$i]["puntosCirculo"]) ? $coleccionJuegos[$i]["puntosCirculo"] : "";
        
        if($puntosX != $puntosO){

            $juegosGanados++;
        }
    }
    return $juegosGanados;
}

 /**
 * Punto 10
 * Verifica cuantos juegos gan?? seg??n X o O
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
 * Punto 11 - funcion de comparaci??n
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

 /**
 * Punto 11
 * Muestra la cantidad de juegos ordenados por nombre jugador O 
 * @param array $coleccionJuegos)
 * @return array
 */ 
function ordenarColeccion($coleccionJuegos)
{
    //Esta funci??n ordena un array tal que los ??ndices de array mantienen sus correlaciones 
    // con los elementos del array con los que est??n asociados, 
    // usando una funci??n de comparaci??n definida por el usuario.
    uasort($coleccionJuegos, 'comparar');
    //  muestra informaci??n sobre una variable en una forma que es legible por humanos
    print_r($coleccionJuegos);
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaraci??n de variables:


//Inicializaci??n de variables:
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
            echo "Ingresar el n??mero de juego entre 0 y ".(count($juegosTotal)-1)."\n";
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
                echo "El jugador " . $nombreJugador . " no gan?? ning??n juego\n";
            }
            break;
        case 4:
            // 4) Mostrar porcentaje de Juegos ganados seg??n el simbolo seleccionado:
            $simbolo = eleccionXO();
            $juegosGanados = juegosGanados($juegosTotal);

            $cantGanados = cantGanados($juegosTotal, $simbolo);
            $porcentajeGanados = $cantGanados*100/$juegosGanados;
            echo "El porcentaje de juegos ganados por " . $simbolo . " es del " . round($porcentajeGanados, 2) . "%.\n";
            break;
        case 5:
            // 5) Mostrar resumen de Jugador:
            echo "Ingrese el nombre del Jugador: ";
            $nombreJugador = strtoupper(trim(fgets(STDIN)));
            $resumen = resumenJugador($juegosTotal, $nombreJugador);

            if ($resumen["juegosPerdidos"] === 0 && $resumen["puntosAcumulados"] === 0) {
                echo "El jugador ". $nombreJugador ." no jug?? ning??n juego a??n.\n";
            }else {
                
                echo "*************************************\n";
                echo "Jugador: " . $resumen["nombre"] . "\n";
                echo "Gan??: " . $resumen["juegosGanados"] . " juegos\n";
                echo "Perdi??: " . $resumen["juegosPerdidos"] . " juegos\n";
                echo "Empat?? " . $resumen["juegosEmpatados"] . " juegos\n";
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






