
# Estructura selectiva

> Condiciones
### IF 
   1. UNA LINEA
	   - IF(TRUE) 'HOLA MUNDO'
		
   2. BLOQUE 
	   - IF(){ BLOQUE }
			
## SCOPE
Esto trata de la elevación de los datos que posee una variable que pueden afectar los 
resultados de nuestros programas

~~~
	// FUNCIONA
        {
            let variable = 'valor'
            console.log(variable)
        }

    // FUNCIONA
		let variable = 'valor'
		{		
			console.log(variable)
		}

	// NO FUNCIONA
		{
			console.log(variable)
		}
		let variable = 'valor'	
~~~

### CON MAS CONDICIONES
    Esta es la estructura selectiva mas simple y mas usada en el desarrollo
~~~
	if(condicion){
		acciones
	}
	else{
		acciones
    }
~~~

### CONDICIONES MULTIPLES Y ANIDADAS
Para poder usar varias condiciones dentro de un if() usamos los operadores de 
corto circuito que son:

> && (Y)
> || (O)

#### Ejemplo
~~~
		if( condicion && condicion ){
			acciones
			if( condicion && Condicion || Condicion ){ <- Anidado o metodo de burbuja
			acciones
			}
		}else if( condicion || Condicion ){
	
		}else{
			acciones
		}
~~~


#### Ejemplo: 

~~~
    let age = parseInt(prompt('Dime tu edad'), 10)

    if (age) {
        if (age >= 18) {
            alert('Eres mayor de edad')
        }else{
            alert('Te faltan años')
        }
    }else{
        age = parseInt(prompt('Tu edad debe ser un numero'), 10)
    }
~~~

# TRUY AND FALSY VALUES
Esto es los verdaderos y falsos valores.

1. FALSY
    - 0
    -  ""
	- NaN
	- undefined
	- null
	> Todos estos tipos de datos son considerados 
	FALSE|FALSO EN UNA CONDICIONAL

2. TRUTHY
	- string no vacío
	- Numero diferente de cero
	- Arrays
	- Objetos
	> Todos estos tipos de datos son considerados 
	TRUE|VERDADERO EN UNA CONDICIONAL


### Continuamos con las estructuras selectivas
Esta estructura a diferencia del IF evalua un valor en varios casos 
lo conocemos como:

## SWITCH

#### Ejemplo

~~~
    let answer = prompt(`¿Cual es la capital de Italia?
        a. Caracas
        b. Madrid
        c. Roma
        `)

    answer.toLoweCase().trim()

    switch(answer)
    {
        case 'caracas':
            alert('Fallaste')	
        break

        case 'madrid':
            alert('Fallaste')
        break

        case 'roma':
            alert('¡CORRECTO!')
        break

        default:
            alert('Ingresa una respuesta')
        break
    }
~~~

# Estructura repetitiva


### Ciclo for

~~~
// la letra i viene a ser el contador que se inicializa en 0
// despues tenemos la condicion que se deb cumplir para finalizar el ciclo i<10
// y por ultimo tenemos el i++ esto se encarga de incrementar el contador i
    for(let i = 0,  i < 10; i++){
        // Aqui dentro van las acciones code

        // El CONTINUE permite saltar la iteracion del ciclo que no cumpla la condición y seguir procesadon
        if (i % 7 === 0) continue; 

        // El BREAK rompe el ciclo
        if (i === 9) break	
    }
~~~

### Ciclo While

~~~
    // El while se encarga de evaluar primero y despues procesar. Y repetir hasta que la condicion se cumpla
    while (i < 10) {
        // acciones
    }

    // Este es inverso Primero procesa la accion y despues evalua y termina cuando cumpla la condicion
    do{
        // acciones
    } while (condition);
~~~