
<?php
// En este archivo php vamos a recepcionar informacion del archivo html

if($_GET) {

    $nombre=$_GET['nombre']; // Entre corchetes va el nombre del txt

    echo "Hola" . $nombre;

}

// NOTA: GET es el envio a traves de una URL que al final estoy recibiendo en un documento metodoGet.php y que se imprime para mostrar

/* Cual es la diferencia entre le metodo GET y POST? : El metodo GET muestra los datos a traves de la URL y el metod POST los oculta y los recepciona*/

?>