# Javascriptcourse

Curso de Javascript desde 0 - [Píldoras informáticas](https://www.youtube.com/watch?v=m2nscBtQEIs&list=PLU8oAlHdN5BmpobVmj1IlneKlVLJ84TID)

## Vistos

- [Vídeo 01 - Presentación](https://www.youtube.com/watch?v=m2nscBtQEIs)
- [Vídeo 02 - Introducción](https://www.youtube.com/watch?v=QrVO_dvjU-M&list=PLU8oAlHdN5BmpobVmj1IlneKlVLJ84TID&index=2)
- [Video 03 - Sintaxis Básica I. Ubicación del código](https://www.youtube.com/watch?v=zSYj95x5WrU&list=PLU8oAlHdN5BmpobVmj1IlneKlVLJ84TID&index=3)
- [Video 04 - Sintaxis Básica II. Estructuras Básicas ](https://www.youtube.com/watch?v=SVmKhuAWvY4&list=PLU8oAlHdN5BmpobVmj1IlneKlVLJ84TID&index=4)
- [Video 05 - Sintaxis Básica III. Operadores Básicos ](https://www.youtube.com/watch?v=eidffYi0kUk&list=PLU8oAlHdN5BmpobVmj1IlneKlVLJ84TID&index=5)
- [Video 06 - Sintaxis Básica IV. Operadores y prompt ](https://www.youtube.com/watch?v=f719B0LDpiE&list=PLU8oAlHdN5BmpobVmj1IlneKlVLJ84TID&index=6)
- [Video 07 - Sintaxis Básica V. Arrays, Matrices, Arreglos ](https://www.youtube.com/watch?v=hTeFMke6F6Q&list=PLU8oAlHdN5BmpobVmj1IlneKlVLJ84TID&index=7)
- [Video 08 - Sintaxis Básica V. Arrays, Matrices, Arreglos II ](https://www.youtube.com/watch?v=yn-o0rxXW0o&list=PLU8oAlHdN5BmpobVmj1IlneKlVLJ84TID&index=8)
- [Video 09 - POO I ](https://www.youtube.com/watch?v=6wB-0QSkk3Y&list=PLU8oAlHdN5BmpobVmj1IlneKlVLJ84TID&index=9)


# Apuntes

## Vídeo 01 - Presentación
- Nada

## Video 02 - Introducción
- Java **NO ES** Javascript.
- Java: lenguaje de programación de propósito general. Se pueden crear aplicaciones "para todo". Se puede crear una aplicación que se ejecute en una web (applets), o que se ejecute en un servidor, también una de escritorio (local). También se pueden ejecutar en dispositivos móviles.
- Javascript: lenguaje de programación de propósito concreto. Tiene un objetivo concreto, ejecutarse en un navegador. No es posible aplicar apps JS que se ejecuten en un servidor o de escritorio (aunque esto último tiene matices). Siempre se ejecutará en un navegador.
	- Se ejecuta en local.
	- Es interpretado (no compilado).
	- Es de respuesta inmediata.
	- Agrega interactividad a los sitios webs. HTML + CSS + JS.
	- Proporciona efectos visuales dinámicos.
- Historia
	- Inventado por Netscape en 1995.
	- Al comienzo había incompatibilidades entre navegadores.
- jQuery
	- Librería de código Javascript ya elaborado, libre, de código abierto, disponible para que cualquier programador la utilice en sus proyectos.
	- Simplifica los dos principales inconvenientes de Javascript:
		1. Dificultad a la hora de programar.
		2. Incompatibilidad entre navegadores.
	- Permite agregar funcionalidades avanzadas en nuestros sitios webs.
	- Se utiliza en millones de sitios web, algunos tan conocidos como los CMS Drupal, Wordpress, Joomla, Prestashop, etc.
- ¿Dónde va el código?
	- Dentro de la página web entre etiquetas **<script>** y **</script>**
		- En el **head**.
		- En cualquier otra parte.
	- En archivos externos con extensión **.js**.

## Video 03 - Sintaxis Básica I. Ubicación del código
- El código JS se puede colocar dentro del **body** o detrás de este.
- El navegador interpreta la página web de arriba hacia abajo. Antes del body se encuentra con el código JS, por lo que implica que este código se ejecuta antes que el contenido web. 
- Ventanas alert:
	- Son modales, se abren en primer plano.
	- Detienen el flujo de ejecución del programa.

## Video 04 - Sintaxis Básica II. Estructuras Básicas
- Sentencia Javascript. Terminan en **;**
- Funciones predefinidas: vienen con el propio lenguaje para ser usadas cuando se necesite.
	- alert();
	- documentwrite();
	- isNaN();
	- etc.
- Se pueden crear **funciones propias**.
- Tipos de datos:
	- String: textos, entrecomillados.
	- Booleans: True o False.
	- Numbers
- Variables
	- Espacio en la memoria del ordenador (RAM) donde se almacena un valor que podrá cambiar durante la ejecución del programa.
	- Sintaxis (declaración): **var puntuacion;**
	- Reglas para dar nombre:
		- Han de comenzar por **letra, símbolo $ o _**.
		- Han de contener **solo** **letras, números, $ y _**.
		- Son **case sensitive**.
		- **No** deben ser palabras reservadas.
		- Se recomiendan que sean descriptivas.
		- Ejemplos: puntuacion, $puntuacion y _puntuacion
	- Inicializar una variable:
	```javascript
	var puntuacion;
	puntuacion = 5;
	```
	- Declaración de variables en la misma línea:
	```javascript
	var puntuacion, record, jugador
	var puntuacion = 5, record = 5000, jugador = "Juan"
	```

## Video 05 - Sintaxis Básica III. Operadores Básicos
- Operadores básicos:
	- Suma: +
	- Resta: -
	- Multiplicar: *
	- Dividir: /
- El operador **+** concatena (une) dos valores (string + numérico).
- Comentarios
```javascript
// Comentario de una línea
/* Comentario
de varias
líneas */
```

## Video 06 - Sintaxis Básica IV. Operadores y prompt
- Prompt: función de entrada de datos (de fuera del programa a dentro).
- Alert: función de salida de datos. Devuvelve la información almacenada.
- Incremento y decremento:
	- **+=**: incrementa en X el valor de una variable: **record+=10**
	- **-=**: decrementa en X el valor de una variable: **record-=7**.
	- ***=**: multiplica en X el valor de una variable: **record*=3**.
	- **/=**: divide en X el valor de una variable: **record/=3**.
	- **++**: incrementa en **1** el valor de una variable: **record++**.
	- **--**: decrementa en **1** el valor de una variable: **record--**.

## Video 07 - Sintaxis Básica V. Arrays, Matrices, Arreglos
- Arrays: "gran variable que puede tener almacenado un grupo de valores".
- Cómo declarar un array (dos formas):
```javascript
var articulos = ["zapatillas", "pantalones", "camisetas"];
var articulos = new Array("zapatillas", "pantalones", "camisetas");
```
- Cómo acceder a un array:
	- El primer índice es el **0**.
```javascript
alert(articulos[0]);
```
- Propiedades y métodos del array
	- **Length**: nº de elementos de un array.
```javascript
alert(articulos.length);
```
	- **Push**: agrega elemento o elementos a continuacuión del array.
```javascript
articulos.push("balón", "raqueta", "bolsa");
```
	- **Unshift**: agrega elemento o elementos a comienzo del array.
```javascript
articulos.unshift("balón", "raqueta", "bolsa");
```
	- **Pop**: elimina elementos al final del array.
```javascript
articulos.pop();
```
	- **Shift**: elimina elementos al comienzo del array.
```javascript
articulos.shift();
```

## Video 08 - Sintaxis Básica V. Arrays, Matrices, Arreglos II
- Utilizando push y unshift

## Video 09 - POO I

# Notas
	- Se puede ver errores de código en Google Chrome pulsando la teclad **F12** > **Consola**.