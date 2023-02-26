# Tipos de Datos

1. Primitivos

    - NULL -> RETORNA 'OBJECT'
    - UNDEFINED
    - NUMBER
    - STRING
    - BOOLEAN
    - SYMBOL()

2. OBJECT

    - OBJECT {} -> RETORNA 'OBJECT' BIEN
    - NULL (JS BUG) X
    - FUNCTION function(){} -> 'function' X
    - ARRAY [] -> RETORNA 'OBJECT' X
 

### En Javascript podemos cambiar los tipos de datos    
    ~~~
    let myVar = 1
    console.log(typeof myVar) // return "number"
    myVar = "hola mundo"
    console.log(typeof myVar) // return "string"
    ~~~

#### Type Coertion
    ESTO INTENTA CONVERTIR UN NUMERO A TEXTO CUANDO SE INTETE
    SUMAR O UN TEXTO A NUMERO SI EL STRING SOLO CONTIENE NUMERO 
    
    ~~~
    console.log(5 + 'hola') // retorna -> '5hola'
    console.log(5 + '5') // retorna -> 10
    console.log(5 * 'hola') // retorna -> NaN
    console.log(5 * '3') // retorna -> 15
    ~~~

#### Datos por valor

    ~~~
    // En la siguiente linea se asignan los valores
    let number1 = 1, number2 = number1

    // Despues a number2 se le asigna un string 
    number2 = 'hola'

    // Al mostrar los datos veremos que number1 no fue afectado por el cambio de number2
    console.log(number2) // retorna -> 'hola'
    console.log(number1) // retorna ->  1
    ~~~

> Esto pasa con los tipo de datos primitivos

#### Datos por referencia
En el siguiente codigo Vemos que una variable recive un arreglo de datos y despues 
se asigna a otra variable:
    ~~~
    let compuesto1 = [1,2,3,4]
    let compuesto2 = compuesto1

    // Aqui se asigna un nuevo valor en la posicion 4 del arreglo compuesto2
    compuesto2[4] = 5 //compuesto.push(5) 

    // Por consecuencia como son datos por referencia si cambia un compuesto el otro tambien
    console.log(compuesto1) // retorna -> [1,2,3,4,5]
    console.log(compuesto2) // retorna -> [1,2,3,4,5]
    ~~~

# Operadores

1. Operadores de asignacion
    - =
    - += (SE PUEDE USAR PARA CONCATENAR TEXTO)
    - -=
    - /=
    - *=
 

2. Operadores de comparación
    - ==  NO USAR MUCHO 
    - === RECOMENDADA
    - !=  DIFERENTE
    - !== DIFERENTE VALOR Y TIPOS DE DATOS
    - <
    - ">"
    - ">="
    - <=
 

3. Operadores unarios
    - typeof
    - ! negacion

4. Operadores aritméticos
    - "+"
    - "-"
    - /
    - % Modulo
    - POS++
    - ++PRE 
    - POS--
    - --PRE

5. Operadores ternarios

 - Este nos permite tomar desiciones de asignacion de valores segun una condición o varias 
 - EXPRESION ? VERDADERO : FALSO
 
    ~~~
    let age = prompt('Dime que edad tienes')
    let isAdult = age >= 18 
                        ? 'Eres mayor de edad' // true
                        : 'Eres un niño' // false
    alert(isAdult)
    ~~~        

6. Operadores de corto circuito

 - || -> ESTO OR LO OTRO
 - && -> ESTO AND ESTO 

    ~~~
    let or = null || 10
    let and = null && 10
    console.log(or) // retorna 10
    console.log(and) // retorna null
    ~~~
