<?php

    $edad = 32; // variables

    echo $edad . "<br>";

    $edad = 32; // cambiar valor de la variable

    echo $edad . "<br>";

    // USO DE LAS CONSTANTES

    // Declarar constante de la forma antigua con el metodo define()
    // define("nombre de la constante", "valor de la constante");
    define("NOMBRE", "Nestor"); // En PHP las constantes deben ser nombradas con mayusculas 

    echo NOMBRE . "<br>"; // Las constantes no necesitan el simbolo de $

    // Declarar constante de la forma mas reciente (a partir de PHP 5.3.0)
    // const NOMBRE = "valor";
    const NOMBRE1 = "Jhoel";

    echo NOMBRE1;

    


?>