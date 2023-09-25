<?php

if($_POST){ // Si hay un envio realiza toda la instruccion
    $valorA = $_POST['valorA']; // Recibimos el elemento llamado valorA
    $valorB = $_POST['valorB']; // Recibimos el elemento llamado valorB

    // If Anidado
    if($valorA == $valorB){ // ==: Para comparar

        echo "El valor de A es igual al valor de B";

        if($valorA == 4){
            echo "<br> El valor de A es igual a 4";
        }

        if($valorA == 5){
            echo "<br> El valor de A es igual a 5";
        }

    }

    if( ($valorA == $valorB) && ($valorA == 4)){
        echo "A es igual a B, y es un numero 4"
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Anidado en php</title>
</head>
<body>

    <form action="ifAnidado.php" method="post">

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