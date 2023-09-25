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

    
    $sql = "SELECT * FROM `fotos`"; // Consulta sql
    $sentencia = $conexion->prepare($sql); // Llamamos al objeto conexion, invocamos al metodo prepare y lo almacenamos en la variable sentencia
    $sentencia->execute(); // Con el metodo execute, ejecutamos la sentencia que esta en la variable

    $resultado = $sentencia->fetchAll(); // El metodo fetchAll me va devolver todo el resultado de la variable sentencia y lo va almacenar en la variable resultado

    // Primera forma de imprimir el resultado
    print_r($resultado);

    // Segunda forma de imprimir el resultado
    foreach($resultado as $foto){
        print_r($foto);
    }

    echo "Conexion establecida";                    
}catch(PDOException $error){ // Capturar error

    echo "Conexion Erronea: " . $error;

}
?>