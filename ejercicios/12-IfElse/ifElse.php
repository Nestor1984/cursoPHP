<?php

if($_POST){ // Si hay un envio realiza toda la instruccion
    $valorA = $_POST['valorA']; // Recibimos el elemento llamado valorA
    $valorB = $_POST['valorB']; // Recibimos el elemento llamado valorB

    // If Anidado
    if($valorA != $valorB){ 

        echo "El valor de A es distinto al valor de B";

    }else{

        echo "Los valores son iguales";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else en php</title>
</head>
<body>

    <form action="ifElse.php" method="post">

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