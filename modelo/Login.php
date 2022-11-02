<?php
include_once ("RolUsuario.php");
include_once ("Usuario.php");
include_once ("ConexionBD.php");
class Login
{
    //Atributos
    private $nombreLogin;
    private $claveLogin;
    public Usuario $objUsuario;
    public ConexionBD $objConexionBD;
    public RolUsuario $objRolUsuario;
    private $stmt;

    public function __construct($nombreLogin, $claveLogin)
    {
        $this->nombreLogin = $nombreLogin;
        $this->claveLogin = $claveLogin;
    }

    public function setNombreLogin($nombreLogin)
    {
        $this->NombreLogin = $nombreLogin;
    }

    public function getNombreLogin()
    {
        return $this->NombreLogin;
    }

    public function validarLogin()
    {
        $objConexionBD = new ConexionBD('localhost:3306', 'root', '28082003', 'loginbd');
        try {
            if ($objConexionBD->conectarBD()) {
                $this->stmt = $objConexionBD->conn->prepare('call sp_ValidarLogin(:nombreLogin, :claveLogin)');
                $this->stmt->bindParam(':nombreLogin', $this->nombreLogin);
                $this->stmt->bindParam(':claveLogin', $this->claveLogin);

                $this->stmt->execute();

                //$datosConsulta=$this->stm->setFechMode(PDO::FETCH_ASSOC);
                $datosConsulta = $this->stmt->fetchAll();
                session_start();

                foreach ($datosConsulta as $datos) {
                    $_SESSION['UsuarioValido'] = $datos[2];
                    $_SESSION['claveUsuario'] = $datos[3];
                }

                if (isset($_SESSION['UsuarioValido'])) {
                    return true;
                } else {
                    return false;
                }
            }
        } catch (PDOException $e) {
            echo "Error de sintaxis de SQL y/o Cpmexión" . $e->getMessage();
        }
    }

    // public function validarLogin(){
    //   try{
    //     $objConexionBD=new ConexionBD('localhost:3306','root','12345','loginbd');
    //     if ($objConexionBD->conectarBD()) {

    //       $this->stmt=$objConexionBD->conn->prepare("call sp_ValidarLogin(:nombreLogin, :claveLogin)");
    //       $this->stmt->bindParam(':NombreLogin',$this->NombreLogin);
    //       $this->stmt->bindParam(':claveLogin',$this->claveLogin);

    //       $this->stmt->execute();

    //     }

    //   }catch(PDOException $e){
    //       echo "  Error de sintaxis de SQL y/o Conexion" . $e->getMessage();
    //   }
    // }

}