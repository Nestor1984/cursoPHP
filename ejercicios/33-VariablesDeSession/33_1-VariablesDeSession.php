<?php

session_start(); // Con session_start(): podemos acceder a las variables de session de otros archivos

echo "Usuario: ". $_SESSION["usuario"] . " estatus: " . $_SESSION["estatus"]; // Como son variables de session podemos usarlas en este otro archivo


?>