<?php
    if($_POST){ // Si hubo envio, pues imprime lo que es el nombre

        // Recibir informacion del formulario HTML (Metodo POST)
        $nombre=$_POST['txtNombre']; // El metodo post me va permitir recepcionar informacion

        echo "Nombre: " . $nombre; // En PHP se concatena con el .
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
    
    <form action="index.php" method="post"> <!--El atributo action con el valor index.php: Nos dice que se esta reenviando su mismo archivo-->
        Nombre: 
        <input type="text" name="txtNombre" id=""> <!-- (name="txtNombre") se va enviar mediante el metodo POST a la variable nombre-->
        <br>
        <input type="submit" value="enviar">
    </form>

</body>
</html>