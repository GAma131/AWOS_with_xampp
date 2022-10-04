<?php
    class RolUsuario{
        //*Atributos
        private $idRolUsuario;
        private $nombreRolUsuario;
        private $descripcion;

        //*Constructor
        public function _construct($nombreRolUsuario, $descripcion)
        {
            $this->nombreRolUsuario=$nombreRolUsuario;
            $this->descripcion=$descripcion;
        }
    }
?>