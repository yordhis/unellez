<?php

    /**
     * PDO 
     * es una api homogenea, nos permite pasar de una base de 
     * dato a otra.  
     */

    try{
        $conexion = new PDO(
            'mysql:host=127..0.1;dbname=tienda',
            'root',
            ''//no tengo clave
        );

        $sql = 'SELECT * FROM articles';
        $ejecutar = $conexion->query($sql);

        foreach ($ejecutar as $fila) {
            echo "{$fila['name']} cuesta-> {$fila['price']}\n";
        }

    }catch(PDOException $e){
        echo 'Error en:' . $e->message() . PHP_EOL;
    }finally{
        // Con esta linea hago que la conexion se
        // Cierre funcione o no el Script
        $conexion = null;
    }