<?php

if($_POST){
    $valorA = $_POST['valorA']; // Recibimos el elemento llamado valorA
    $valorB = $_POST['valorB']; // Recibimos el elemento llamado valorB

    // Operadores logicos
    if( ($valorA != $valorB) && ($valorA > $valorB)){
        echo "El valor de A es diferente y mayor al valor B ";
    }


    /*
    Algunos operadores logicos en php:

    - &&, and : AND
    - ||, or : OR
    - xor : XOR
    - ! : NOT

    */
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos en php</title>
</head>
<body>

    <form action="operadoresLogicos.php" method="post">

        <p>Valor A:</p>
        <input type="text" name="valorA" id="">
        <br>
        <p>Valor B:</p>
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>