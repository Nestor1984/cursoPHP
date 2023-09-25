<?php

class Persona{

    // Metodos Estaticos: Se pueden llamar sin tener una instancia (un objeto)

    /* 
        Sintaxis:
        public static function nombreDelMetodo($parametros){

        }
    */

    public static function unMetodo(){ // Metodo Estatico le pertenece a la clase
        echo "Hola soy un metodo estatico";
    }

}


/*
Asi llamamos a un metodo estatico en JAVA: Persona.unMetodo();
Asi llamamos a un metodo estatico en PHP: Persona::unMetodo();
*/

// LLamamos al metodo estatico
Persona::unMetodo();

?>