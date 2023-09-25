<?php

// Clase Super o Clase Padre
class Persona{

    // ATRIBUTOS DE LA SUPER CLASE
    public $nombre;
    private $edad;
    protected $altura;

    // METODOS DE LA SUPER CLASE
    public function asignarNombre($nombre){
        $this->nombre = $nombre;
    }

}

// Sub Clase o Clase Hija
class Trabajador extends Persona{ // Extends: Vamos a heredar atributos y metodos de la Super clase Persona

    // ATRIBUTOS DE LA SUBCLASE
    public $puesto;

    // METODOS DE LA CLASE HIJA
    public function presentarComoTrabajador(){
        echo "Hola soy " . $this->nombre . " y soy un " . $this->puesto;
    }

}


// Hacemos una instancia de la clase Hija
$objetoDeLaClaseHija = new Trabajador();

$objetoDeLaClaseHija->asignarNombre("Nestor Jhoel"); // Asignamos un nombre 
$objetoDeLaClaseHija->puesto = "Profesor"; 

$objetoDeLaClaseHija->presentarComoTrabajador();

?>