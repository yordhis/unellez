# Modulo 3 - JAVASCRIPT

## Conceptos Básicos

### ¿Que es una variable?
Una variable es un elemento de datos con nombre cuyo valor puede cambiar durante el curso de la ejecución de un programa.

### Declarar Variables

> let name = "Yordhis"

Aqui podemos ver la palabra reservada o expresión "let"
seguido viene el nombre de la variable "name",
para asignar un valor usamos el igual "="
y por ultimo el valor o argumento "Yordhis"

#### Para mostrar los datos de una variable usamos

> console.log(name) 
El console.log nos permite mostrar datos en la terminal o consola de comandos de nuestro navegador o desarrollador de código

### Formas invalidas de definir una variable

> let 1variable
> let váriableñ
> let varia}ble

### Operaciones matemáticas

> let number = 18

> console.log(number) 
> console.log(number * 2) 
> console.log(number - 2) 
> console.log(number / 2) 
> console.log(number + 120) 

> console.log(number%2) 
Esta operacion matematica se conoce como modulo y retorna el resto de la división. 

### Error de variable

> let number
> console.log(number) Esto retorna UNDEFINED
La variable esta declarada pero no esta definida

## Documentar codigo o comentar codigo

> /* COMENTARIO DE HUMANO */

> // COMENTAR CODIGO

~~~
  /**
  * COMENTARIO -> EL INTERPRETE LO IGNORA 
  * 
  * PUNTO Y COMA -> ES OPCIONAL -> EL PUNTO Y COMA SEPARA ESPRECIONES
  * 
  * ESPACIOS EN BLANCOS SON IGNORADOS -> const url    =    "web"
  * 
  * CASE SENCITY -> ES SENCIBLE A MAYUCULAS Y MINUSCULAS 
  * CONVENSION LOWER CAMES CASE -> listUsers 
  * CONVENSION LOS NOMBRES DE LAS VARIABLES SIEMPRE EN INGLES
  * 
  * @var var
  * @const const
  * @param param
  * @method method
  * 
  */
 ~~~


# Tipo de datos

> BOOLEAN: ESTO SOLO PUEDE RETORNAR
> TREU -> 1
> FALSE -> 0
 

> UNDEFINED: LA VARIABLE ESTA DECLARADA PERO NO ESTA DEFINIDA

> NULL: EL ELEMENTO SOLICITADO NO EXISTE

### typeof 
 ESTO SIRVE PARA RETORNAR EN UN STRING 
 EL NOMBRE DEL TIPO DE DATO DE UNA VARIABLE

> console.log(typeof number) // retorna -> 'number'