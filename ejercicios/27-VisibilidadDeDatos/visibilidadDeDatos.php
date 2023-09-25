<?php

    /*
    Modificadores de acceso en PHP:

        public: Public: Los miembros (propiedades y métodos) declarados como públicos son accesibles desde cualquier lugar,
        tanto dentro como fuera de la clase. Pueden ser accedidos y modificados directamente.

        private: Los miembros declarados como privados solo son accesibles desde la clase que los define. No pueden ser 
        accedidos ni modificados directamente desde fuera de la clase ni desde las clases que heredan de ella.

        protected: : Los miembros declarados como protegidos solo son accesibles desde la clase que los define y desde las
        clases que heredan de ella. No pueden ser accedidos ni modificados directamente desde fuera de la clase.
    */

    class Persona{

        // ATRIBUTOS
        public $nombre;
        private $edad;
        protected $altura;

    }

?>