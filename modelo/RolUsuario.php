<?php
    class RolUsuario{
        //*Atributos
        private $idRolUsuario;
        private $nombreRolUsuario;
        private $descripcion;

        //*Constructor
        public function _constructor($nombreRolUsuario, $descripcion){
            $this->nombreRolUsuario=$nombreRolUsuario;
            $this->descripcion=$descripcion;
        }

        
    }
?>