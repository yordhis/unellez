# Metodos para manipular los Números

> METODOS
  
 - toFixed(cantidadDeDecimales) sintaxis -> number.toFixed(2)
 - parseInt(string, 10)
 - parseFloat()

	~~~
	let numText = '10'
	let num1 = parseInt(numText, 10) // retorna -> 10
	let num2 = parseFloat(numText, 10) // retorna -> 10,00
	let num3 = parseFixed(numText, 10) // retorna -> Uncaught ReferenceError: parseFixed is not defined at <anonymous>:1:1
	~~~

## MATH

 - math.floor() 
 - math.ceil() 
 - math.round() 
 - math.random() 
 
Ejemplo:

~~~
	Math.floor(20.7) //retorna -> 20 redondea hacia abajo 
	Math.ceil(20.1) //retorna -> 21 redondea hacia arriba 
	Math.round(20.1) //retorna -> 20 redondea hacia abajo  
	Math.round(20.6) //retorna -> 20 redondea hacia arriba  
	Math.random() //retorna -> 0.5546545646
	Math.random() *10 //retorna -> 5.5546545646
	Math.ceil(Math.random() * 10) //retorna -> 1 o X numero entero
~~~

# Tratamiento de String o Cadena de Texto

> Propiedades
		- .length

> Métodos o funciones
	Estos metodos no reciben parametros
  		- .trim() -> Quita espacios
		- .toUpperCase() -> Convertir minusculas a MAYUSCULAS
		- .toLoweCase() -> Convertir MAYUSCULAS a minusculas

#### Ejemplo:
~~~
	let answer = prompt('¿Cual es la capital de venezuela?').toUpperCase().trim()

	let message = answer === 'CARACAS'
				? '¡Correcto!'
				: '¡Te equivocastes! la respuesta es Caracas'

	alert(message)
~~~


### Encontrar caracteres en las cadenas de texto

1. indexOf(string [, i])
	- Retorna -1 si no encuentra el string
	- Esta funcion busca una letra de izquierda a derecha
		
2. lastIndexOf()
	- Retorna -1 si no encuentra el string
	- Esta funcion busca una letra de derecha a izquierda

3. includes(string [, i])
	- Retorna BOOLEAN true si o false no
	- Busca una palabra en la cadena de texto solicitada
		
4. starsWith(string [, i])
	- Retorna BOOLEAN true si o false no
	- Pregunta si COMIENZA con la cadena de texto ingresada
	- sirve para validar urls y demas cosas
		
5. endsWith(string [, i])
	- Retorna BOOLEAN true si o false no
	- Pregunta si TERMINA con la cadena de texto ingresada
	- sirve para validar urls y demas cosas

#### Ejemplo:
~~~
	let profesor = "Debora"

	profesor.indexOf('a', 0) // retorna la posicion [5]

	profesor.lastIndexOf('a', 0) // retorna la posicion [0]

	'https://ed.team/cursos/js'.includes('cursos') // retorna true

	'https://ed.team/cursos'.starsWith('https://ed.team') // retorna true

	'https://ed.team/cursos'.endsWith('cursos') // retorna true
~~~

# MANIPULAR STRING O CADENAS DE TEXTO
En la siguiente lista estan unos de los metodos o funciones  nativas de ES6

   1. .replace(original, replace)

   2. .split(separador[,catidad])

   3. .substring(inicio[, fin])
	    - No incluye el fin 

   4. .substr(inicio[,cantidad])
		- Si STRAT|INICIO es negativo, empieza a extraer desde atras
		- inicio es posicion y cantidad es la cantidad de caracteres que va a sustraer

   5. .slice(inicio[, fin])
		- Se diferencia de substr con valores negativos
		- END|FIN negativo: no toma lo ultimo [fin|end] valores
		- START|INICIO negativo: empieza a contar desde el final


#### Ejemplo
~~~
	// REPLACE
		'Yordhis'.replace('Yordhis','Yordhis Osuna') // retorna string 'Yordhis Osuna'

	// SPLIT
		'Yordhis Osuna'.split(' ') // retorna array ['Yordhis', 'osuna']

		'Yordhis Osuna'.split(' ')[0] // retorna string 'Yordhis'

		'Yordhis'.split('') // retorna array ['Y','o','r','d','h','i','s']

		'Yordhis'.split('')[2] // retorna string 'r'

		'yordhis'[2] // retorna string 'r'

	// SUBSTRING

		'hola mundo'.substring(4) // retorna string ' mundo'

		'hola mundo'.substring(2) // retorna string 'la mundo'

		'hola mundo'.substring(2, 5) // retorna string 'la '

		'hola mundo'.substring(5, -3) // retorna string 'hola '

	// SUBSTR

		'hola mundo'.substr(-2) // retorna string 'do'

		'hola mundo'.substr(-4) // retorna string 'undo'

	// SLICE

		'hola mundo'.slice(-5, -2) // retorna string 'mun'

		'hola mundo'.slice(-5, -1) // retorna string 'mund'
~~~









 