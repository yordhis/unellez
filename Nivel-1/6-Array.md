# ARRAYS
Son datos estructurados, que se conoce como una lista de valores
rodeado de [] corchetes y separados por comas , ejemplo: [1,2,3,4,5,6,7,89]

~~~ 
    // Un array es:
    let array = [1,2,3,'hola soy un valor', [1,2,3,4,5,6,7,89], {}]
    
    // Los array pueden contener distintos tipos de datos como lo vimos en la linea de codigo anterior

    // accerder a un elemento:
    c(array[3])

    // Saber cuantos elementos tiene un array se usa "length"
    // muestra la cantidad total de elementos
    c(array.length)

    // para obtener el ultimo indice de una array es length - 1
    c(array[array.length-1])
~~~

### DESESTRUCTURAR ARRAY

~~~ 
    let palabras = ['hola', ' amigo', ' como', ' estas?']

    // en este caso  para obtener cada valor y formar la oracion completa 
    // seria asignar cada indice del array a una variable distinta y despues 
    // concatenar para mostrar todo lejible

    // PERO gracias a la DESESTRUCTURACION DE ARRAY SE PUEDE 
    // hacer mas rapido de la siguiente manera:

    let [p1,p2,p3,p4] = palabras
    // seria un array de variable para tomar los valores del array 
    // PALABRA

    c(p1 + p2 + p3 + p4)
~~~

# Agregar o quitar valores de un Array

~~~
    const c = console.log

    let array = [1,2,3,4,5,6]

    // Agregar o quitar

        // Al final
            // .push(value) AGREGA A LO ULTIMO
            array.push(2)
            c(array)

            // .pop() QUITA EL ULTIMO
            array.pop()
            c(array)

        // Al inicio
            // .unshift(value) AGREGA AL INICIO
            array.unshift(10)
            c(array)

            // .shift() ELIMINA EL PRIMERO
            array.shift()
            c(array)
~~~

# Posicion personalizada

~~~
        let paises = ['venezuela', 'colombia', 'peru', 'chile', 'ecuador']

        // .splice(startindex, quanity, value1, value2, value3)
                // => retoena un array con los elementos

                // startindex -> indice donde se va a empezar a insertar los elementos
                // quantity -> Cantidad de elementos que seran eliminados y si le pasamos cero no elimina nada
                // value -> son los valores que se van a añadir al ARRAY

                // Esta instruccion agrega el valor costa rica al 
                // array PAISES en la posicion 2 del array
                paises.splice(2,0,'Costa rica')
                c(paises)

                // Para eliminar un elemento de un array 
                // se usa la siguiente instruccion
                paises.splice(4,1)
                c(paises)

        // .slice(start[,end])
                // Extrae en un nuevo array los valores desde start
                // hasta [end - 1] no modifica el array original

                str = paises.slice(2,4)
                c(str)
~~~

# Ordenar Arrays

~~~
    const c = console.log
    let text = "Venezuela es un pais bendecido"
    
    // .reverse() INVIERTE EL ORDEN DE UN ARRAY

        let arrayText = text.split('')
        c(arrayText)

        // invertir posiciones
        arrayText.reverse()
        c(arrayText)

        // unimos el texto
        c(arrayText.join(''))

        // creamos una funcion que haga todo esto

        const sifrarText = string => string.split('').reverse().join('')
        c(sifrarText(text)) // invierte todo
        c(sifrarText(sifrarText(text))) // lo devuelve a su orden original

    // .sort(callback)

        let alfabeto = ['a','x', 'z', 'b', 'c']
        let numbers = [1000,1,200,123,0,78,4,5]

        c(alfabeto.sort())

        // El metodo sort no puede ordenar numeros ya que siempre los ordena
        // como string y los compara

        // Ahora para ordenar los numero se debe crar una funcion
        // que compare los numero por medio de una resta
        c(numbers.sort((a,b)=> a -b ))

~~~

# Concatenar y Transformar a String
    
~~~
        let alfabeto = ['a','x', 'z', 'b', 'c']
        let numbers = [1000,1,200,123,0,78,4,5]

        // .join -> CONVIERTE EL ARRAY A TEXTO
        c(alfabeto.join(','))

        // .concat() Es como el push pero se puede añadir vario elementos y no modifica el array original
        c(numbers.concat(2,3))
        c(numbers.concat(2,3).sort((a,b)=> a -b ))
~~~
   
# Encontrar Elemento En Un Array
    
~~~
        let cosasPerdidas = ['plato', 'jabon', 'sepillo', 'lapiz', 'anillo']
        let numerosAleatorios = [,0,5,986,65,222,520,1000,2458,3,7]
        
        // .indexOf(value)
            c(cosasPerdidas.indexOf('lapiz')) 
            // esto devuelve el indice donde se 
            // encontro el elemento filtrado  

        // .find(callback)
            c(numerosAleatorios.find(numero => numero >100)) 
            // devuelve el valor
        
        // .findIndex(callback)
            c(numerosAleatorios.findIndex(numero => numero >100)) 
            // devuelve el indice
~~~            

# Spread Operator En Array

~~~
    const c = console.log

    let numbers = [1,10,3,26,10,1000]
    c(numbers)

    // Eliminar elementos duplicados en un array
    // en este caso queremos eliminar el elemento con el valor 10 que esta duplicado

    // Para esto se usa el OBJECT new Set(arrays)
    c(new Set(numbers))

    // Este objeto SET elimina los datos duplicados
    // pero retorna un objeto 
    // => Set(5) {1, 10, 3, 26, 1000}
    // y de esta manera no nos sirve ya que tendriamos que recorrer
    // el objeto para crear otro array y no tiene ciencia hacer eso

    // Pero gracias al SPREAD OPERATOR se puede hacer de la siguiente manera:
    c([...new Set(numbers)])

    // para no estar repitiendo esta instruccion podemos crear 
    // una funcion que se encarge de esta instruccion Ejemplo:

    const removeDuplicates = arrays => [...new Set(arrays)]

    c(removeDuplicates(numbers))

    // por otra parte el SPREAD OPERATOR se puede aplicar en el 
    // objeto Math

        // Math.max
        c(Math.max(numbers)) // => NaN esto pasa porque el metodo max espera son argumento y no arrays 

        // aqui es donde se usa el SPREAD OPERATOR
        c(Math.max(...numbers))

        // Math.min
        c(Math.min(numbers)) // => NaN esto pasa porque el metodo min espera son argumento y no arrays
        
        // aqui es donde se usa el SPREAD OPERATOR
        c(Math.min(...numbers))
~~~

# Recorrer arrays

~~~
    const c = console.log

    let profesores = ['juan', 'pedro', 'mateo', 'lucas', 'jeremia']

    // for
    for (let i = 0; i < profesores.length; i++) {
    c(profesores[i])
    }
    // Esta instruccion se usa pero no es tan practica se recomienda FOR OF
~~~

### for of

~~~
    for (const profesor of profesores) {
        c(profesor + 'EdTeam')
    }
~~~

### forEach

~~~
    // Esto es un metodo que recibe un callback
    profesores.forEach( (elemento, indice, profesores) => {
        c(elemento) // el elemento de cada iteracion
        c(indice) // el indice de cada elemento
        c(profesores) // opcional se puede recibir ARRAYS 
    })

    // otra aplicacion con el metodo forEach
    // seria calcular el cubo de varios numeros en un array
    let numbersRandom = [1,2,3,4,5,6,7,9]
    let numberAlCubo =[]
    numbersRandom.forEach(number =>{
        numberAlCubo.push(number * number * number)
    })
    c(numberAlCubo)
~~~

### Busqueda de datos en un array

~~~
    let profesores = ['juan', 'pedro', 'mateo', 'lucas', 'jeremia']

    // .some(callback) 

        // el some busca si solo un elemento cumple la condicion
        // y retorna true o false
        c(profesores.some(prof => prof === 'pedro'))
        c(profesores.some(prof => prof === 'pedronilo'))

    // .every(callback)

        // el every busca que todos coinsidan para retornar true
        c(profesores.every(prof => prof === 'pedro'))
        c(profesores.every(prof => prof.length >= 3 ))
~~~

# Metodos MAP-FILTER-REDUCE
~~~
    const c = console.log
    let numbers = [5,4,6,3,7,9]

    // .map(callback)
        // este le aplica una operacion o varias a los elementos de un array
        let numbersCuadrado = numbers.map(num => num * num) 
        c(numbersCuadrado)

    // .filter(callback)
        // Filtra los elementos de un array que cumplan con la condicion
        // y crea un nuevo array
        let numbersFilter = numbers.filter(num => num > 6)
        c(numbersFilter) // [7,9]

    // .reduce(callback)
        // Este recibe dos parametros ya que va comparando
        // de dos en dos 
        // se puede usar para realizar una suma de varios 
        // numeros en un array
        let suma = numbers.reduce( (a,b) => a + b )
        c(suma)

    // TODOS LOS METODOS CREAN UN ARRAY NUEVO
    // Y NO MODIFICAN EL ARRAY ORIGINAL
    // AHORA EL DOM SI PUEDE MODIFICAR EL ARRAY ORIGINAL 
~~~