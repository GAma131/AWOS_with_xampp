<?php
    // include_once('../modelo/ConexionBD.php');
    // $objConexionBD = new ConexionBD('localhost:3306','root','28082003','loginbd');
    // $objConexionBD -> conectarBD();

    // echo "Bienvenido a PHP";

    include_once('../modelo/Login.php');

    $nombreUsuario;
    $claveUsuario;

    $nombreUsuario=$_REQUEST["txtUsuario"];
    $claveUsuario=$_REQUEST["txtClave"];

    $objLogin=new Login($nombreUsuario, $claveUsuario);

    if ($objLogin->validarLogin()) {
        // session_start();
        // $_SESSION['UsuarioValido']= $nombreUsuario;

        echo "Bienvenido " . $nombreUsuario;
        echo'
        <script>window.location.href="../vista/paginas/php/idexAdmin.php"</script>';
    }else {
        echo "\nUsuario y/o contraseña incorrecta";
    }
?>