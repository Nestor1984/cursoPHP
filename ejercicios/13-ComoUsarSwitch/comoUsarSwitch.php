<?php

if($_POST){ // Si hay un envio

    $boton = $_POST['btnValor'];

    switch($boton){ // Evaluamos la variable

        case 1:
            echo "El usuario presiono la opcion 1";
            break; // Para que no continue la evaluacion

        case 2:
            echo "El usuario presiono la opcion 2";
            break; // Para que no continue la evaluacion
        
        case 3:
            echo "El usuario presiono la opcion 3";
            break; // Para que no continue la evaluacion
        
        default:
            echo "Opcion no encontrada";
            break;

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como Usar Switch</title>
</head>
<body>
    
    <form action="comoUsarSwitch.php" method="post">

        <input type="submit" name="btnValor" value="1">
        <br>
        <input type="submit" name="btnValor" value="2">
        <br>
        <input type="submit" name="btnValor" value="3">

    </form>

</body>
</html>