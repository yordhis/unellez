const c = console.log

let user ={
    nombre: 'juan',
    apellido: 'perez',
    edad: 45,
    profesion: 'juan',
    empresa: "lol"
}

c(Object.getPrototypeOf(user))

c(Object.getPrototypeOf('hola mundo'))