<?php

if($_POST){
    $valorA = $_POST['valorA']; // Recibimos el elemento llamado valorA
    $valorB = $_POST['valorB']; // Recibimos el elemento llamado valorB

    // Realizamos una operacion (suma, resta, multiplicacion y division)
    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $multiplicacion = $valorA * $valorB;
    $division = $valorA / $valorB;

    echo "La suma es: " . $suma;
    echo "<br>";
    echo "La resta es: " . $resta;
    echo "<br>";
    echo "La multiplicacion es: " . $multiplicacion;
    echo "<br>";
    echo "La division es: " . $division;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos en php</title>
</head>
<body>

    <form action="operadoresAritmeticos.php" method="post">

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