<?php

# Funcion date

/*
Para leer la documentacion: php.net/manual/es/function.date.php
*/

// Sintaxis:
// En espanol: date("Anio", "Mes", "Dia"); 
// En ingles: date("Year", "Month", "Day"); 
$hoy = date("Y - m - d"); // Le enviamos de argumento un String

echo $hoy;

?>