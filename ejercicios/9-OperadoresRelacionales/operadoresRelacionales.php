<?php

if($_POST){
    $valorA = $_POST['valorA']; // Recibimos el elemento llamado valorA
    $valorB = $_POST['valorB']; // Recibimos el elemento llamado valorB

    // Operadores relacionales
    if($valorA > $valorB){
        echo "El valor " . $valorA . " es mayor al valor " . $valorB;
    }


    /*
    Algunos operadores relaciones en php:
    - > : mayor
    - < : menor
    - != : diferente
    - >= : mayor o igual
    - <= : menor o igual

    */
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores relacionales en php</title>
</head>
<body>

    <form action="operadoresRelacionales.php" method="post">

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