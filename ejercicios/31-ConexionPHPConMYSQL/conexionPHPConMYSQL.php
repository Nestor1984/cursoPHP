<?php

// Conexion a la base de datos
$servidor="localhost:3307"; // NOTA: localhost se intepreta en nuestro equipo como la direccion 127.0.0.1
$usuario="root";
$contrasenia="";

try{ // Intentar
                        #"mysql:host=$servidor:dbname=album": Es la cadena de conexion con la base de datos
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia); // PDO: Es una clase que me permite conectarme a la base de datos
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ATTR_ERRMODE: Es una constante estatica porque esta en mayuscula. ERRMODE_EXCEPTION: Es una constante estatica
                        #PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION: Son los argumentos que necesita el metodo setAttribute para mostrar errores
    
    // Intrucciones sql
    $sql="INSERT INTO `fotos` (`nombre`, `ruta`) VALUES ('Jugando con la programacion', 'foto.jpg');";

    // EJECUCION
    $conexion->exec($sql); // Con el metodo exec: ejecutamos la consulta

    echo "Conexion establecida";                    
}catch(PDOException $error){ // Capturar error

    echo "Conexion Erronea: " . $error;

}
?>