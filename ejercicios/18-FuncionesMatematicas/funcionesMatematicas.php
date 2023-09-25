<?php

// Pagina para ver la documentacion: php.net/manual/es/funcref.php

echo "<strong> Algunas funciones matematicas en php </strong> <br>";

/*
Metodo random:

rand(int $min, int $max): int

Ejemplo:
*/

$numeroAleatorio = rand(1, 10);

echo "El numero aleatorio del 1 al 10 es: " . $numeroAleatorio . "<br>";

/*
Metodo Valor Absoluto:

abs($numero): number

Ejemplo:
*/

$valorAbsoluto = abs(-3.4);

echo "El valor absoluto es: " . $valorAbsoluto . "<br>";

/*
Metodo Expresion Exponencial:

pow($base, $exponente): number
*/
$potencia = pow(4, 2);

echo "La potencia es: " . $potencia . "<br>";

/*
Metodo raiz cuadrada:

sqrt(float $arg): float
*/

$raizCuadrada = sqrt(4);

echo "La raiz cuadrada es: " . $raizCuadrada;


?>