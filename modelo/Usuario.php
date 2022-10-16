<?php
class Usuario
{
    // *Atributos
    private $idusuario;
    private $nombreUsuario;
    private $apellidoPaternousuario;
    private $apellidoMaternoUsuario;
    private $emailusuario;
    private $telefonousuario;
    private $estatususuario;

    //*constructor
    public function __contruct($idUsuario, $nombreUsuario, $apellidoPaterno, $apellidoMaterno, $emailUsuario, $telefonoUsuario, $estatusUsuario)
    {
        $this->$idUsuario = $idUsuario;
        $this->$nombreUsuario = $nombreUsuario;
        $this->$apellidoPaterno = $apellidoPaterno;
        $this->$apellidoMaterno = $apellidoMaterno;
        $this->$emailUsuario = $emailUsuario;
        $this->$telefonoUsuario = $telefonoUsuario;
        $this->$estatusUsuario = $estatusUsuario;
    }

    /**
     * Get the value of idusuario
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set the value of idusuario
     *
     * @return  self
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get the value of nombreUsuario
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set the value of nombreUsuario
     *
     * @return  self
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get the value of apellidoPaternousuario
     */
    public function getApellidoPaternousuario()
    {
        return $this->apellidoPaternousuario;
    }

    /**
     * Set the value of apellidoPaternousuario
     *
     * @return  self
     */
    public function setApellidoPaternousuario($apellidoPaternousuario)
    {
        $this->apellidoPaternousuario = $apellidoPaternousuario;

        return $this;
    }

    /**
     * Get the value of apellidoMaternoUsuario
     */
    public function getApellidoMaternoUsuario()
    {
        return $this->apellidoMaternoUsuario;
    }

    /**
     * Set the value of apellidoMaternoUsuario
     *
     * @return  self
     */
    public function setApellidoMaternoUsuario($apellidoMaternoUsuario)
    {
        $this->apellidoMaternoUsuario = $apellidoMaternoUsuario;

        return $this;
    }

    /**
     * Get the value of emailusuario
     */
    public function getEmailusuario()
    {
        return $this->emailusuario;
    }

    /**
     * Set the value of emailusuario
     *
     * @return  self
     */
    public function setEmailusuario($emailusuario)
    {
        $this->emailusuario = $emailusuario;

        return $this;
    }

    /**
     * Get the value of telefonousuario
     */
    public function getTelefonousuario()
    {
        return $this->telefonousuario;
    }

    /**
     * Set the value of telefonousuario
     *
     * @return  self
     */
    public function setTelefonousuario($telefonousuario)
    {
        $this->telefonousuario = $telefonousuario;

        return $this;
    }

    /**
     * Get the value of estatususuario
     */
    public function getEstatususuario()
    {
        return $this->estatususuario;
    }

    /**
     * Set the value of estatususuario
     *
     * @return  self
     */
    public function setEstatususuario($estatususuario)
    {
        $this->estatususuario = $estatususuario;

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