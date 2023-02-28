# OBJETOS
 Es un conjunto de propiedades y metodos donde las 
 propiedades son las caracteristicas del objeto y los 
 metodos son las acciones que puede hacer el objetos

#### Ejemplo:

~~~
    const c = console.log

    // Creando nuestro primer objeto
    let perro = {
        // Propiedades o atributos
        nombre: 'Neron',
        edad: 3,
        color: "negro",
        sexo: 'macho',
        vacunas: true,

        // Acciones
        correr(){
            return this.nombre + ' esta corriendo'
        }
    }
~~~

### Accediendo al objeto

~~~
    // para acceder a las propiedades y metodos solo 
    // se coloca perro.propiedad o metodo()
    c(perro)
    c(perro.nombre)
    c(perro.edad)
    c(perro.color)
    c(perro.sexo)
    c(perro.vacunas)
    c(perro.correr)
    c(perro.correr())

    // tambien se puede acceder a las propiedades por medio
    // de la notacion de ['name-propiedad']
    c(perro['color'])
~~~

### Los objetos pueden recibir expresiones

~~~

    // creamos variable globales 
        let a = 'hola', b = 'mundo'

    // creamos el objeto saludo
        let saludo = {
            [a + b]: 'Mi primer hola mundo'
        }
        c(saludo)

    // tambien se puede igualar expresiones a las 
    // propiedades del objeto
    // sintaxis 1 de igualar
        let myObject = {
            a: a,
            b: b
        }
        c(myObject)

    // sintaxis 2 de igualar optimizada
        let myObject2 = {a,b}
        c(myObject2)
~~~

# AGREGAR Y QUITAR PROPIEDADES DE UN OBJETO 

~~~

    let user ={
        nombre: 'juan',
        apellido: 'perez',
        edad: 45,
        profesion: 'juan',
        empresa: "lol"
    }

    // eliminar propiedades
        c(user)
        c(delete user.empresa)
        c(user)

    // agregar propiedades
        user['company'] = 'Start'
        user.subcripto = true

    c(user)
~~~

# Recorrer Objects
Creamos un objeto para recorrerlo:
~~~
    const c = console.log
    let perro = {
        nombre: 'Neron',
        edad: 6,
        color: 'negro',
        sexo:'macho',
        vacunas: true,
        correr(){
            return `${this.nombre} corre rapido`
        }
    }
~~~

### Operadores
1. delete
2. in

##### Ejemplo:
~~~   
    //* delete
    //* in
    // es un operador que devuelve true o false 
    // si el objeto tiene la propiedad buscada
        c('sexo' in perro)
        c('nombre' in perro)
        c('vacuna' in perro)
        c('vacunas' in perro)

    // tambien se puede recorrer con in un object

        .hasOwnProperty(propieda)
            // esto lo que hace es preguntar si 
            // la propiedad pertenece verdaderamente
            // al objeto
~~~

### Mutabilidad

~~~
    // los datos primitivos se asignan por valor
    // estos datos son independientes
    // es decir que si:
        let a = 'gato', b = 'perro'
        c(a)
        c(b)
        a=b
        b= 'persona'
        c(a)
        c(b)
    // si uno cambia el otro conserva su dato


    // Los Objetos se asignan por referencia
    // es decir que  estan encadenados y si el
    // objeto A cambia el B tambien
        let otroPerro = perro
        c(otroPerro)

        otroPerro.altura = 10
        c(perro)
        c(otroPerro)

    // SI QUEREMOS CREAR UN OBJETO APARTIR DE OTRO PERO QUE 
    // NO ESTE ENCADENADO ES DECIR QUE SEA INDEPENDIENTE SE 
    // USA 
        object.assign({}, perro) 

        let perroIndependiente = Object.assign({}, perro)

        c(perroIndependiente)

        perroIndependiente.orejas = 2

        c(perro)
        c(perroIndependiente)
~~~

### Recorrer un objeto con:

1. for in
~~~
    // for in
        for(property in perro){
            c(property)
        }

    // vamos a añadirle una propiedad
        Object.prototype.patas = 125

        for(property in perro){
            c(property)
        }

    // El detalle de esto es que pastas es una
    // propiedad heredada y es un conflicto 
    // ya que deseamos saber cuales son las 
    // propiedades nativas del objeto.

    for(property in perro){
        if(perro.hasOwnProperty(property)){
            c(property)
        }
    }
~~~

2. for of 

~~~
    // for of 
    // no recorre un objeto, porque un objeto 
    // no tiene indices
    
    Object.entries()
        // devuelve como array la propiedad y el valor
            c(Object.entries(perro))
        
    Object.keys()
        // deveulve las propiedades
            c(Object.keys(perro))

    Object.values()
        // deveulve los valores de las propiedades
            c(Object.values(perro))
~~~

## Prototipos
* Es un molde de otro molde donde se pueden heredar otros moldes
* todo lo que veamos en mayusculas es un prototipo

~~~
  // Esto muestra todo el prototipo del USER
    c(Object.getPrototypeOf(user))

  // aqui podemos ver que el hola mundo es un object
  // ya que al colocarle .metodos se ejecutan
    c('hola mundo'.length)
    c('hola mundo'.toUpperCase())
    c(Object.getPrototypeOf('hola mundo'))

  // Para insertar metodos a los prototipos se usa
  // .prototype.metodo1...
    String.prototype.length2 = '120'

    c('hola'.length2)

~~~