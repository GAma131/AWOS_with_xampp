<?php
include_once(ConexionBD.php);
include_once(RolUsuario.php);
include_once(usuario.php);

class login {
    private $idlogin;
    private $nombreLogin;
    private $claveLogin;
    private $fechaCreacionLogin;
    private $estatusLogin;
    RolUsuario $objRolUsuario;
    Usuario $objUsuario;
    ConexionBD $objConexionBD;
    private $stmt;
}

// *CONSTRUCTOR
public _construct($nombreLogin, $claveLogin){
    $this->nombreLogin=$nombreLogin;
    $this->claveLogin=$claveLogin;

}

// *METODOS SET Y GET
/**
 * Get the value of idlogin
 */
public function getIdlogin()
{
    return $this->idlogin;
}

/**
 * Set the value of idlogin
 *
 * @return  self
 */
public function setIdlogin($idlogin)
{
    $this->idlogin = $idlogin;

    return $this;
}

/**
 * Get the value of nombreLogin
 */
public function getNombreLogin()
{
    return $this->nombreLogin;
}

/**
 * Set the value of nombreLogin
 *
 * @return  self
 */
public function setNombreLogin($nombreLogin)
{
    $this->nombreLogin = $nombreLogin;

    return $this;
}

/**
 * Get the value of claveLogin
 */
public function getClaveLogin()
{
    return $this->claveLogin;
}

/**
 * Set the value of claveLogin
 *
 * @return  self
 */
public function setClaveLogin($claveLogin)
{
    $this->claveLogin = $claveLogin;

    return $this;
}

/**
 * Get the value of fechaCreacionLogin
 */
public function getFechaCreacionLogin()
{
    return $this->fechaCreacionLogin;
}

/**
 * Set the value of fechaCreacionLogin
 *
 * @return  self
 */
public function setFechaCreacionLogin($fechaCreacionLogin)
{
    $this->fechaCreacionLogin = $fechaCreacionLogin;

    return $this;
}

/**
 * Get the value of estatusLogin
 */
public function getEstatusLogin()
{
    return $this->estatusLogin;
}

/**
 * Set the value of estatusLogin
 *
 * @return  self
 */
public function setEstatusLogin($estatusLogin)
{
    $this->estatusLogin = $estatusLogin;

    return $this;
}

// *METODOS PARA LA GESTIÓN DLE CRUD

public function validarLogin(){
    $objConexionBD = new ConexionBD('localhost:3306','root','28082003','loginbd');
    try {
        if ($objConexionBD->conectarBD()) {
            $this->stmt=$objConexionBD->conn->prepare('call sp_validarLogin(:nombreLogin, :ClaveLogin)');
            $this->stmt->binParam(':nombreLogin',$this->getNombreLogin);
            $this->stmt->binParam(':claveLogin',$this->getClaveLogin);

            $this->stmt->execute();

            $datosConsulta=$this->stm->setFechMode(PDO::FETCH_ASSOC);
            $datosConsulta=$this->stm->fetchAll();
            session_start();

            foreach ($datosConsulta as $datos) {
                $_SESSION['usuarioValido']=$datos[0];
                $_SESSION['claveUsuario']=$datos[1];
            }

            if (isset($_SESSION['usuarioValido'])) {
                return true;
            }else{
                return false;
            }
        }
    } catch (PDOException $e) {
        echo "Error de sintaxis de SQL y/o Cpmexión".$e->getMessage();
    }
}

?>