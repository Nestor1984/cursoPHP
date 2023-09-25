<?php


    // FOREACH


    // Imprimimos el arreglo numerico o predefinido con foreach
    echo "<strong> Arreglo Numerico </strong> <br>";
    $arregloNumerico = array("Java", "SQL", "HTML", "CSS", "PHP");

    /*
    Sintaxis:
    foreach($nombreDelArray as $variableMagica){
        
    }
    */

   foreach($arregloNumerico as $elementos){ // La variable magica $elementos: copia cada uno de los elementos del array y los imprime
        echo $elementos . "<br>";
   }

   echo "<hr>";

   // Imprimos el arreglo asociativo
   echo "<br> <strong> Arreglo Asociativo </strong>";
   $arregloAsociativo = array("clave1"=>"elemento1", "clave2"=>"elemento2");

    /*
    Sintaxis:
    foreach($nombreDelArray as $indiceString => $variableMagica){
        
    }
    */
    echo "<br> Primero imprimimos los indices Strings :D <br>";
    foreach ($arregloAsociativo as $indiceString => $elemento) {
        echo $indiceString . "<br>";
    }

    echo "<br> Ahora imprimimos los elementos :D <br>";
    foreach ($arregloAsociativo as $indiceString => $elemento) {
        echo $elemento . "<br>";
    }
?>