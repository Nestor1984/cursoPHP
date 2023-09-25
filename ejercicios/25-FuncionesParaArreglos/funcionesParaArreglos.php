<?php

// Para leer la documentacion: php.net/manual/es/ref.array.php

echo "<strong> Funciones para arreglos en php </strong> <br>";

$frutas = array("Fresa", "Pera", "Manzana");

/*La funcion array push: coloca nuevos elementos en el arreglo ya existente
Sintaxis:
array_push($nombreDelArreglo, "Nuevo Elemento");
*/

array_push($frutas, "Uva");

print_r($frutas); // Metodo para imprimir los arreglos de forma especial

?>