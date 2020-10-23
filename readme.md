# Conociendo el Lenguaje Php (III)
####  Estructuras de control

#### Activitad 1
Hacer una página en PHP que para una nota almacenada en una variable,muestre por pantalla lo siguiente:
    a) Si la nota es menor que 5 -> “suspenso”
    b) Si la nota es 5 -> “aprobado”
    c) Si la nota está entre 6 y 7 -> “bien”
    d) Si la nota está entre 8 y 9 -> “notable”
    e) Si la nota es 10  -> “sobresaliente”
Nota: Las notas < que 5 deben aparecer coloreadas en rojo y las mayores que 5 en verde.`


#### Actividad 2
Realizar un script que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
1. Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
2. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
La duración en segundos de la llamada estará almacenada en una variable.

#### Activitad 3
Escribe un programa en que dado un número aleatorio del 1 a 7 escriba el correspondiente nombre del día de la semana.
Utiiza la setencia switch. utiliza la función [mt_rand()](https://www.php.net/manual/es/function.mt-rand.php) para la generación de 
números aleatorios

#### Activitad 4
Realiza un programa que dada una hora contenida en una variable `$hora`, muestre buenos días, buenas tardes o buenas noches según la hora.
Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5. Utiliza la funcion [date()](https://www.php.net/manual/es/function.date.php).

#### Activitad 5
Escribe un programa que nos diga el horóscopo a partir de un día y mes aleatorio almacenado en 2 variables `$dia` y `$mes`.
Junto al horóscopo debe aparecer la imagen correspondiente. Puedes encontrar las imágenes en la `/assets/images/horoscopo.

#### Activitad 6
Hacer una página en PHP que muestre una figura similar a la siguiente. NOTA solo está permitido el uso de un * en todo el código.
Nota: Deberás utilizar 2 bucles `for
 @
 @@
 @@@
 @@@@
 @@@@@ 
 @@@@@@

#### Activitad 7
Escriba un programa que cada vez que cuando se ejecute muestre la tirada de 6 dados al azar. Las imágenes de los dados las puedes encontrar en `assets/images/dados`.

#### Actividad 8
Se pide realizar un generador para una apuesta del juego de Euromillones que nos permita obtener al azar cinco números
principales (del 1 al 50) y dos números (del 1 al 9) llamados “estrellas”.
Las estrellas las pintaremos en verde mientras que los números en azul.

#### Activitad 9
Escriba un programa que dibuje 30 círculos númerados. Usa la estructura `for`.

#### Actividad 10
Crea una páginas php que muestra todo el código ASCII en una tabla de 16 columnas.
Nota:
1. La función chr() recibe un número y muestra el código ASCII equivalente
2. No puedes repetir código.