<?php

    /* Conectar */

    $mysqli = mysqli_connect('127.0.0.1','root','','tienda');

    /* Varificar la conexión */
    if (mysqli_connect_errno($mysqli)) {
        echo 'Fallo la conexion' . mysqli_connect_error() . PHP_EOL;
    }
    
    /* Ejecutar la sentencia SQL */
    $resultado = mysqli_query($mysqli, 'SELECT nombre, precio  FROM productos');
    
    /* Imprimir filas */
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo $fila['nombre'] . 'Cuesta' . $fila['precio'] . PHP_EOL;
    }

    /* Liberar memoria de resultados */
    mysqli_free_result($resultado);

    /* Cerrar la conexión */
    mysqli_close($mysqli);