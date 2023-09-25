<?php

    echo "<strong> <em> Leer Arreglos con PHP </em> </strong> <br>";


    // Imprimimos arreglo numerico:
    echo "<strong> Imprimir arreglo Numerico: </strong> <br>";
    $arreglo = array("Fresa", "Pera", "Manzana"); 

    echo $arreglo[1]; // Imprimimos el array en la posicion 1

    echo "<br> <br>"; // Salto de linea

    // Imprimimos arreglo no numerico (arreglo asociativo):
    echo "<strong> Imprimir arreglo no Numerico: </strong> <br>";
    $arreglo2 = array("N"=>"Nestor", "J"=>"Jhoel", "M"=>"Mamani"); 

    echo $arreglo2["N"]; // Imprimimos el array en la posicion N


    // Imprimimos el arreglo numerico con for
    echo "<br> <br> <strong> Imprimir primer arreglo con bucle for: </strong> <br>";
    for ($i=0; $i < 3; $i++) { 
        
        echo $arreglo[$i] . "<br>";

    }

?>