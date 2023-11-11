<?php

    try{

        $pdo = new PDO(
            'mysql:host=127.0.0.1;dbname=tienda',
            'root',
            ''//no pass
        );

        //Sentencia para truncar la tabla 
        $sql = 'TRUNCATE TABLE productos';
        $sentencia = $pdo->prepare($sql);
        $sentencia->execute();

        // Preparar
        /**
         * Con PDO las sentencias preparadas se
         * declaran con dos -> :var_name <-
         */
        $sql = 'INSERT INTO productos (nombre, talla, precio) VALUES(:nombre, :talla, :precio)';
        $sentencia = $pdo->prepare($sql);
        // Vincular
            //parametros
            $sentencia->bindParam(':nombre', $nombre);
            $sentencia->bindParam(':talla', $talla);
            $sentencia->bindParam(':precio', $precio);


        // Ejecutar
            // Insertar 1
            $nombre = 'Camiseta A';
            $talla = 'XL';
            $precio = 8909;
        $sentencia->execute();

            // Insertar 2
            $nombre = 'Camiseta B';
            $talla = 'L';
            $precio = 8909;
        $sentencia->execute();


        //-------------------------
        // Podemos pasar parametros con nombre y ejecutar
        $sentencia->execute([
            ':nombre' => 'Camiseta C',
            ':talla' => 'M',
            ':precio' => 1234
        ]);
        $sentencia->execute([
            ':nombre' => 'Camiseta D',
            ':talla' => 'S',
            ':precio' => 234
        ]);

        // Podemos usar parametros de sustitucion -> ? <-
        
        $sql = 'SELECT nombre, talla, precio FROM productos WHERE nombre LIKE ? AND precio > ?';
        $sentencia = $pdo->prepare($sql);

        $sentencia->execute(['%S%', 1000]);

        $resultados = $sentencia->fetchAll();

        foreach ($resultados as $fila) {
            echo "{$fila['nombre']} vale {$fila['precio']}\n";
        }

        // Sentecia Actualizar registros
        $sql = 'UPDATE productos  SET precio = :precio WHERE id = :id';
        $otraSentencia = $pdo->prepare($sql);
        $otraSentencia->execute([
            ':precio' => 1500,
            ':id'     => 4
        ]);

        // Sentencia Eliminar registro
        $sql = 'DELETE FROM productos WHERE id = :id';
        $otraSentencia = $pdo->prepare($sql);
        $otraSentencia->execute([
            ':id' => 1
        ]);

    }catch(PDOException $e){
        echo 'Error en:' . $e->menssage() . PHP_EOL;
    }finally{
        $pdo = null;
    }