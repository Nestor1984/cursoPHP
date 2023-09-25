<?php

class Persona{

    // ATRIBUTOS
    public $nombre;
    private $edad;
    protected $altura;

    // METODOS

    // Metodo Constructor
    function __construct($nombre){ // __construct($parametros): es la palabra reservada en PHP para decir que es un metodo constructor
        
        $this->nombre = $nombre;

    }

    // Metodo para imprimir nombre
    public function imprimirNombre(){
        echo "Hola mi nombre es: " . $this->nombre;
    }

}

// Hacemos una instancia de la clase Persona
$objeto = new Persona("Nestor Jhoel"); # Le enviamos el argumento

$objeto->imprimirNombre(); # Imprimos el nombre

?>