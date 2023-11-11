<?php

/**
 * Sentencias preparadas con mysqli 25:00 time
 * 
 */

 /* Conectar */
$mysqli = new mysqli('127.0.0.1','root','','tienda');

/* Varificar la conexión */
if ($mysqli->connect_errno) {
 echo 'Fallo la conexion' . $mysqli->connect_error . PHP_EOL;
        }

/* Preparación */
$sql = "INSERT INTO productos (nombre, talla, precio) VALUES (?, ?, ?)";
$sentencia = $mysqli->prepare($sql);
if (!$sentencia) {
 
    echo 'Fallo la preparacion:' . $mysqli->connect_errno . ' ' . $mysqli->connect_error . PHP_EOL;
}

/* Vincular paramentros */
// i : Entenro
// s : String
// d : Double
// b : Blob
$nombre = 'Camiseta de Pinpon';
$talla = 'S';
$precio = 3900;

if (!$sentencia->bind_param('ssi', $nombre, $talla, $precio)) {
    echo 'Fallo la Vinculacion:' . $mysqli->connect_errno . ' ' . $mysqli->connect_error . PHP_EOL;
}

/* Ejecutar */
if (!$sentencia->execute()) {
    echo 'Fallo la Ejecucion:' . $mysqli->connect_errno . ' ' . $mysqli->connect_error . PHP_EOL;
}else{
    echo "{$sentencia->affected_rows} Filas insertadas. \n";
}

//Ejemplo 2

// Preparar
$sql = 'SELECT nombre, precio FROM productos';
$sentencia2 = $mysqli->prepare($sql);

// Vincular param: no es necesario por que no excige parametros

//Ejecutar
$sentencia2->execute();

// Vincular las variables resultado
$sentencia2->bind_result($nombre, $precio);

// Usar datos
while ($fila = $sentencia2->fetch()) {
    // como se vincularon los resultados a las variables $nombre, $precio para imprimir no se usa $fila['name']
    //Sino que se coloca la variable VINCULADA
    //Ejemplo:
    echo "{$nombre} Cuesta: {$precio}\n";
}

//Cerrar la centencia o librar
$sentencia->close();

//Cerrar la Conexion
$mysqli->close(); 
