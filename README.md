# Examen_PHP_lruizap

Examen de PHP de 2º DAW

# Disfruta

Debes crear un programa que indique el número de veces que aparece una fruta en una colección de frutas.

Comentarios
El programa tendrá una sola página.
Cada vez que se carga la página, se muestran entre 7 y 20 frutas al azar.
Las frutas serán las correspondientes a las entidades numéricas con código Unicode que van desde 127815 hasta 127827, es decir, desde &#127815; (🍇) hasta &#127827; (🍓)
A continuación se indica el número de veces que aparece cada fruta en el apartado anterior.
En esa frase cambia la imagen de la fruta y el número de veces que se repite.
Ojo al caso en que el valor sea 1 o más de uno pues la palabra que le sigue cambia a "vez" ó "veces" en función de ello.
Salida ejemplo
DisFruta con PHP
9 frutas
🍏 🍏 🍏 🍎 🍈 🍒 🍐 🍇 🍒

Resultados
La fruta 🍏 está 3 veces en la lista.

La fruta 🍎 está 1 vez en la lista.

La fruta 🍈 está 1 vez en la lista.

La fruta 🍒 está 2 veces en la lista.

La fruta 🍐 está 1 vez en la lista.

La fruta 🍇 está 1 vez en la lista.

¡¡¡ DisFruta otra vez !!!

Código HTML generado del ejemplo

        <center><h1>DisFruta con PHP</h1></center>

        <h2>9 frutas</h2>

        <p style="font-size: 7rem">
          &#127823;
          &#127823;
          &#127823;
          &#127822;
          &#127816;
          &#127826;
          &#127824;
          &#127815;
          &#127826;
        </p>

        <h2>Resultados</h2>

        <p>La fruta <span style="font-size: 2rem">&#127823;</span> está <strong>3</strong> veces en la lista.</p>
        <p>La fruta <span style="font-size: 2rem">&#127822;</span> está <strong>1</strong> vez en la lista.</p>
        <p>La fruta <span style="font-size: 2rem">&#127816;</span> está <strong>1</strong> vez en la lista.</p>
        <p>La fruta <span style="font-size: 2rem">&#127826;</span> está <strong>2</strong> veces en la lista.</p>
        <p>La fruta <span style="font-size: 2rem">&#127824;</span> está <strong>1</strong> vez en la lista.</p>
        <p>La fruta <span style="font-size: 2rem">&#127815;</span> está <strong>1</strong> vez en la lista.</p>
        <br>
          <center><button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button></center>
        <br>

# El Adivino

En este ejercicio se debe crear un programa que pida al usuario adivinar un número entre 1 y 100, dándole pistas para facilitar la tarea.

Comentarios
La página inicial mostrará un cuadro de texto donde escribir la predicción.
Al hacer click sobre Comprobar número
Si no se escribe nada o algo diferente a un número entero se mostrarán los avisos No ha escrito ningún número o No ha escrito un número entero positivo, respectivamente.
Si el número es correcto, indicaremos si el númereo era Demasiado grande ó Demasiado pequeño.
Cuando se acierte el número se mostrará un mensaje de felicitación y se dará la opción de volver a jugar.

# Pares y nones

En este ejercicio se debe crear un programa que muestre una mano del juego "Pares y nones".

Comentarios
Las reglas del juego son las siguientes:

Cada jugador muestra un número de dedos de la mano (de ninguno a todos).

Se cuenta el total de dedos mostrados entre ambos jugadores.

El jugador 1 gana si ese total es par.

El jugador 2 gana si ese total es impar.

El programa tendrá una sola página:

Se mostrarán las imágenes de las manos de ambos jugadores, al azar.

Se mostrará una imagen verde en el lado ganador.

Se mostrará una imagen roja en el lado perdedor.

Al actualizar la página, se mostrará una nueva partida.

Pares y nones - Ejemplo de código HTML
<tr>
<td><img src="img/gana.svg" alt="Gana" height="100"></td>
<td><img src="img/3.svg" alt="3" height="200"></td>
<td><img src="img/5.svg" alt="5" height="200"></td>
<td><img src="img/pierde.svg" alt="Pierde" height="100"></td>
</tr>

# Muestra cartas

En este ejercicio se debe crear un programa que muestre el número de cartas del palo indicado por el usuario. Además, el programa señalará si entre las cartas mostradas hay cartas iguales consecutivas.

Comentarios
El programa tendrá dos páginas:

La primera página muestra un formulario con dos controles:

El número de cartas que se van a mostrar (entre 3 y 12).

El palo de las cartas

La segunda página mostrará:

El número de cartas del palo indicado por el usuario con sus correspondientes imágenes, generadas al azar.

Si hay cartas iguales consecutivas entre ellas.

Si se intenta acceder directamente a la segunda página sin pasar por la primera o si se envía a la segunda página información distinta a la esperada, se mostrarán mensajes de error con la información faltante o incorrecta.

No se deben cambiar los nombres de los controles incluidos en las plantillas.

Al actualizar la segunda página, se mostrarán cartas distintas, pero la misma cantidad y del mismo palo.

Muestra cartas - Ejemplo de código HTML

 <h2>4 cartas de diamantes</h2>
​
  <p>
    <img src="img/d3.svg" alt="3" width="100">
    <img src="img/d10.svg" alt="10" width="100">
    <img src="img/d10.svg" alt="10" width="100">
    <img src="img/d4.svg" alt="4" width="100">
  </p>
​
  <p>Hay cartas iguales seguidas.</p>
