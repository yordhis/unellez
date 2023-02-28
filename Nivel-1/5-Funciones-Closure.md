# Funciones
Es un trozo de codigo reutilizable en el que hay un conjunto de instrucciones.

> Cuando una funcion no devuelve un volor RETORNA UNDEFINED

~~~
    // Nuestra primera función
    function saludar(persona, sexo){
        return sexo === 'm'
                    ? `Bienvenido a la Unellez, ${persona}`
                    : `Bienvenido a la Unellez, ${persona}`
    }
~~~

### Buenas practicas para crear funciones
	A partir de ES6 podemos crear nuestras funciones de la siguiente forma:

~~~
    // En ES6 por medio de una constante la igualamos a unos parametros
    // y con "=>" o Arrow Function y llaves ya tenemos nuestra fncion creada

    // De esta forma se reduce y retorna el valor de la suma
    const sumar = (a,b) => a + b 
    
    const saludar = (persona, sexo = "m") =>{
            saludo = sexo === 'm'
                ? 'Biembenido'
                : 'Bienvenida'
            return `${saludo} a EDteam ${persona}` 
    } 


~~~


## Parametros y Argumentos

> PARAMETROS: SON LOS DATOS QUE SOLICITA LA FUNCION O METODO

> ARGUMENTOS: SON LOS VALORES QUE SE ASIGNAN A LOS PARAMETROS

- Nota:
    - CUANDO HAY MAS ARGUMENTOS QUE PARAMETROS LOS ARGUMENTOS SOBRANTES SON IGNORADOS

    - CAUNDO HAY MENOS ARGUMENTOS QUE PARAMETROS EL PARAMETRO RETORNA UNDEFINED


## Ejecutando nuestras funciones
~~~
    console.log(saludar("Yordhis"))
    console.log(saludar("Debora", "f"))
~~~


## PARAMETROS REST (SPREAD OPERATOR) 

Esto trata de expandir la capacidad de recibir argumentos dentro de los parametros 
de la función
	
#### Ejemplo

	const sumarTodos = (...numeros) => {
		let resultado = 0
		for (let i = 0; i < numeros.length; i++) {
			resultado += numeros[i]
			
		}
		return resultado
	}


# Las funciones como ciudadanos de primera clase

~~~ 
    // PARA ASIGNAR UNA FUNCION SE DEBE HACER SIN COLOCAR LOS PARENTESIS 
    // PORQUE LOS PARENTESIS SE ENCARGA DE EJECUTAR LA FUNCION
    // ASIGNACION CORRETA:

        const c = console.log

    // ASIGNACION NO CORRETA:

        const c = console.log()

        // ESTO ES INCORRECTO YA QUE NO ES UNA FUNCION PORQUE ESTA EJECUTADA Y ES UN VALOR STRING, BOOLEAN ...

    // Creamos nuestra funcion multiplicar
    const multiplicar = (a, b) => a * b

    // Asignamos la función multiplicar
    const myFunction = multiplicar

    // Creando variables para que contengan los valores de la funciones ejecutdas
    let result1 = multiplicar(8,10)
    
    // Tambien podemos ejecutar una funcion dentro de nuestros parametro y se convierte en unos de los 
    // argumentos de la función 
    let result2 = multiplicar(result1, multiplicar(2,5))

    c(result1) // => 80
    c(result2) // => 800
    c(myFunction(2,10)) // => 20
~~~

# CLOSURES

## FUNCIONES QUE RETORNAN OTRAS FUNCIONES 
> SE CONOCE COMO CLOSURES 

~~~
    // EJEMPLO POR DECLARACION

    function sumar2(x = 1) {
        return function (y = 2) {
            return x + y
        }
    }

    // EJEMPLO POR FLECHA
    // CLOSURES
    const sumar3 = x => y => x + y

    c(sumar3(10)(20))

    const doSomething = x => y => x * y

    const a = doSomething(2)(2) // => 4 
    const b = doSomething(3) // => y => 3 * y
    c(doSomething(a)(b(3))) // => 36
~~~

#### Ejercicio
~~~
    function aumentar() {
        let numero = 0 
        return function () {
            numero++
            c(numero)
        }
    }

    aumentar()() // => 1
    aumentar()() // => 1
    aumentar()() // => 1
    // Este comportamiento es debido a que se esta ejecutando toda funcion 
    // Y la variable NUMERO en cada iteración se inicia en CERO

    // Ahora  si asignamos una parte la funcion AUMENTAR a una constante
    // dividimos la funcion y la variable NUMERO no se iniciaria en cada iteracion 
    // sino que conserva el valor en cada iteracion y lo aumenta
    // Ejemplo

    const incrementar = aumentar()

    incrementar()
    incrementar()
    incrementar()
~~~


# TIPO DE FUNCIONES V8

### FUNCIONES PURAS 
	SON FUNCIONES QUE NO MODIFICAN NADA QUE ESTE AFUERA 
	QUE NO TIENEN EFECTOS SECUNDARIOS

#### Ejemplo: 
~~~
	// NO ES UNA FUNCION PURA
		let p = 'hola'
		const darSaludo = namePersona => {
			p = p + namePersona
			return p
		}

		c(darSaludo('Juan')) // => 'HOLA JUAN'
		c(p) // => 'HOLA JUAN'
		// EN ESETE CASO ME MODIFICA LA VARIABLE EXTERNA DANDOLE EL DATO DE SALUDO

	// ESTO SI ES UNA FUNCION PURA
		let namePersona = 'hola'
        const puroSaludar = (saludo, namePersona) => `${saludo} ${namePersona}`

        c(puroSaludar(namePersona, "Juan"))  // => 'HOLA JUAN'

		c(namePersona) // => 'HOLA'

		// DE ESTA FORMA NO ME EDITA LA VARIABLE EXTERNA SINO QUE ME MANTIEN EL DATO ORIGINAL
~~~

## FUNCIONES AUTOEJECUTADA 
~~~
		let saludo = 'hola'
		const autoSaludar = ((saludo, namePersona) => `${saludo} ${namePersona}`)(saludo, 'pedro')
		c(autoSaludar)

		// CONVERTIMOS LA FUNCION EN EXPRESION COLOCANDO PARENTECIS AL PRINCIPIO Y FIN DE LA FUNCION
		// Y LA EJECUTAMOS COLOCANDO DOS PARENTESIS MAS PARA INSERTAR LOS DATOS DE ENTREDA
~~~

## FUNCIONES NOMBRADAS Y ANONIMAS
~~~
	// LAS FUNCIONES NOMBRADAS SON LAS NORMALES QUE SIEMPRE USAMOS
        function sumar(a,b){return a + b}

	// FUNCIONES ANONIMAS 
        // Esta FA = funcion anonima, se ejecuta de inmediato
        // Recive dos parametros
        // a = "hola"
        // c = console.log

        ((a, c)=>{
            c(a)
        })("hola", console.log)

        // Esta FA se ejecuta despues de 3 segundos
		setTimeout(()=>{
			alert('hola cyber staff')
		},3000)

		// LAS FUNCIONES ANONIMAS SE LES CONOCE COMO COLLBACK
~~~

