
# Base de datos
## Comandos de la consola de mySQL

Para porde usar la consola de comando para administrar la DB 
se configura las variables de entorno del sistema en caso de ser windows 
o ejecuta esta direccion.
~~~
  C:\xampp\mysql\bin>mysql
~~~

# Nota: 
  1- La terminal de MySQL no es sencible 
  a las mayusculas y minusculas.

  2- Las instrucciones no terminan hasta que se 
  cierre con un punto y coma (;)

### Para acceder a la DB desde la consola se usa el siguiente comando
~~~
mysql -u root -p
~~~

### Ver version de mySQL
~~~
SELECT VERSION();
~~~

### Ver la fecha actual
~~~
SELECT CURRENT_DATE();
~~~

### Ver fecha y hora actual
~~~
SELECT NOW();
~~~

### Ver usuario actual
~~~
SELECT USER();
~~~

### Para  cancelar la instruccion
~~~
   -> \c
~~~

### Ver las bases de datos
~~~
SHOW DATABASES;
~~~

### Para eliminar una base de datos
~~~
DROP DATABASE db_name;
~~~

### Para crear una base de datos
~~~
CREATE DATABASE db_name;
~~~

### Para usar o accesar a una base de datos
// usamos la expresión regular USE seguidamente del nombre de base de datos (db_name)
~~~
USE db_name;

~~~

### Mostrar tablas de la DB seleccionada
// Este comando muestra todas las tablas que contiene la DB en uso.
~~~
SHOW TABLES;
~~~

### Crear tabla en la DB seleccionada

 NOMBRE-TIPO(LONGITUD)-PREDETERMINADO-COTEJAMIENTO-ATRIBUTOS-NULO-INDICE-AI
~~~
CREATE TABLE productos(
    id int(11) unsigned NOT NULL AUTO_INCREMENT,
    nombre varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    talla varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    precio int(11) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
~~~

### Ver los detalles de una tabla
// Esto muestra la estructura de datos de la tabla deseada
~~~
DESCRIBE table_name;
~~~

### Eliminar tabla de la base de datos
~~~
DROP TABLE table_name;
~~~

### Insertar REGISTROS en una tabla
~~~
INSERT INTO productos VALUES (NULL, 'Camiseta HTML', 'L', '1000');
~~~

### Mostrar registros de una tabla
// Selección general
~~~
SELECT * FROM productos;
~~~
// Seleccion espesífica 
~~~
SELECT nombre, precio FROM productos;
~~~

### Mostrar con condiciones
// Seleccioná todo los productos que su precio sobre pase los 1000
~~~
SELECT nombre, precio FROM productos WHERE precio = 1000;
~~~

### Actualizar registros
~~~
UPDATE productos SET precio = 1800 WHERE id = '2';
~~~

### Ordenar los registros
~~~
SELECT nombre, precio FROM productos ORDER BY nombre ASC;
SELECT nombre, precio FROM productos ORDER BY precio DESC;
~~~

### Ordenar con LIKE y condiciones
##### Filtro para las buquedas usuado LIKE y espesíficacon con el [%]
> %S a la izquierda: quiere decir que buscara todas las palabras que terminan en [S]
> S% a la derecha: quiere decir que buscara todas las palabras que terminan en [S]
> %S% a ambos lados: quiere decir que buscara todas las palabra que tengan [S]
~~~
SELECT nombre, precio FROM productos WHERE nombre LIKE '%S%' AND precio > 1500;
~~~

### Eliminar registro de una tabla (Ojo no olvidar e WHERE)
~~~
DELETE FROM productos WHERE id = 3;
~~~

### Eliminar registros y hacer que los ID comiensen desde uno -> 1
~~~
TRUNCATE TABLE productos;
~~~