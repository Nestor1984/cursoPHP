<?php

// Una clase: es una plantilla para crear objetos

class Persona {

    // ATRIBUTOS
    public $nombre;

    // METODOS
    public function asignarNombre($nombre){ 
        $this->nombre = $nombre; // Con -> : Hacemos referencia a los atributos de la clase
    }

}

// Hacemos una instancia de la clase Persona (creamos un objeto)
$objetoAlumno = new Persona();

// Asignamos un nombre al atributo de la clase Persona
$objetoAlumno->asignarNombre("Nestor"); // Invocamos al metodo 

echo $objetoAlumno->nombre . "<br>"; // Llamamos al objeto y invocamos al atributo

?>