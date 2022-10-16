<?php
class RolUsuario
{
//*Atributos
    private $idRolUsuario;
    private $nombreRolUsuario;
    private $descripcion;

    //*Constructor
    public function _constructor($nombreRolUsuario, $descripcion)
    {
        $this->nombreRolUsuario = $nombreRolUsuario;
        $this->descripcion = $descripcion;
    }

    // *METODOS SET Y GET

    /**
     * Get the value of idRolUsuario
     */
    public function getIdRolUsuario()
    {
        return $this->idRolUsuario;
    }

    /**
     * Set the value of idRolUsuario
     *
     * @return  self
     */
    public function setIdRolUsuario($idRolUsuario)
    {
        $this->idRolUsuario = $idRolUsuario;

        return $this;
    }

    /**
     * Get the value of nombreRolUsuario
     */
    public function getNombreRolUsuario()
    {
        return $this->nombreRolUsuario;
    }

    /**
     * Set the value of nombreRolUsuario
     *
     * @return  self
     */
    public function setNombreRolUsuario($nombreRolUsuario)
    {
        $this->nombreRolUsuario = $nombreRolUsuario;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    //Metodos para el CRUD

    public function insertarRolUsuario()
    {
        //Aqui va el codigo para insertar el usuario
    }

    public function modificarRolUsuario()
    {
        //Aqui va el codigo para insertar el usuario
    }

    public function eliminarRolUsuario()
    {
        //Aqui va el codigo para insertar el usuario
    }

    public function consultarRolUsuario()
    {
        //Aqui va el codigo para insertar el usuario
    }
}