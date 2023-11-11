<?php

/* Conectar */
$mysqli = new mysqli('127.0.0.1', 'root', '', 'tienda');

/* Varificar la conexión */
if ($mysqli->connect_errno) {
    echo 'Fallo la conexion' . $mysqli->connect_error . PHP_EOL;
}
/* Ejecutar la sentencia SQL */
$resultado = $mysqli->query('SELECT nombre, precio  FROM productos');

/* Imprimir filas */
while ($fila = $resultado->fetch_assoc()) {
    echo $fila['nombre'] . 'Cuesta' . $fila['precio'] . PHP_EOL;
}

/* Liberar memoria de resultados */
$resultado->free();

/* Cerrar la conexión */
$mysqli->close();
