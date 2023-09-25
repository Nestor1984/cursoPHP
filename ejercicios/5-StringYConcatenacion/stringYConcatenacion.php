<?php

if($_POST){ // Si haces un envio utilizamos post

    $txtNombre = $_POST['txtNombre'];// Vas a obtener el dato del metodo POST
    $txtApellido = $_POST['txtApellido']; //Recibimos el apellido
    echo "Hola " . $txtNombre . " " . $txtApellido; // Concatenamos con el .


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="stringYConcatenacion.php" method="post">

        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>

        Apellido:
        <input type="text" name="txtApellido" id="">
        <br>
        <input type="submit" value="Enviar">


    </form>

</body>
</html>