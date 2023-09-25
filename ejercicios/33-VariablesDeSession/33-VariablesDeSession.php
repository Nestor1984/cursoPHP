<?php

session_start(); // Este metodo nos va servir para mantener informacion, en cualquier pagina, mientras el navegador este abierto

$_SESSION["usuario"] = "nestor"; // Creando variable tipo session
$_SESSION["estatus"] = "logueado"; // Declarando variable tipo session con el nombre "estatus" y el contenido "logueado"

echo "Session Iniciada" . "<br>";

echo "Usuario: ". $_SESSION["usuario"] . " estatus: " . $_SESSION["estatus"];

?>