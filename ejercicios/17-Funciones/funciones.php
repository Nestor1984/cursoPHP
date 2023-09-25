<?php

/*
Funciones (propias)

Sintaxis:

function nombre_de_funcion($parametros){

}
*/


// Funcion 1 (procedimiento)
function imprimirNombre($nombre){
    echo "Mi nombre es: " . $nombre;
}

// Funcion 2 (procedimiento)
function imprimirNombreMadre($nombreMadre, $apellidoMadre = ""){ // Cuando inicializamos el parametro, ya no nos va a pedir a la fuerza que le enviemos un argumento 
    echo "El nombre de la madre es: " . $nombreMadre . " y su apellido es: " . $apellidoMadre;
}

// Funcion 3 (funcion)
function sumarNumeros($n1, $n2){
    $suma = $n1 + $n2; # Return: Para almacenarlo en variables o mostrarlo directamente en pantalla 
    return $suma;
}


// INVOCAMOS A LAS FUNCIONES

// Procedimiento
imprimirNombre("Nestor");

echo "<br> <br>";

// Procedimiento
imprimirNombreMadre("Angelica");

echo "<br> <br>";

// Funcion
$suma = sumarNumeros(3, 4);

echo "La suma es: " . $suma;




?>