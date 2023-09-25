<?php
# Aqui leemos los datos

session_start(); // Iniciamos seccion

# isset():metodo para saber si hay algo vacio, si tiene algo
if ( isset($_SESSION["usuario"]) ) { // Si hay algo de informacion en la seccion

    # Imprimimos
    echo "Usuario: ". $_SESSION["usuario"] . " estatus: " . $_SESSION["estatus"];

} else{

    echo "No hay datos";

}

?>