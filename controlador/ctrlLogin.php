<?php
    // include_once('../modelo/ConexionBD.php');
    // $objConexionBD = new ConexionBD('localhost:3306','root','28082003','loginbd');
    // $objConexionBD -> conectarBD();

    // echo "Bienvenido a PHP";

    include_once('../modelo/login.php');

    $nombreUsuario;
    $claveUsuario;

    $nombreUsuario=$_REQUEST["txtUsuario"];
    $claveUsuario=$_REQUEST["txtClave"];

    $objLogin=new Login();

    if ($objLogin->validarLogin()) {
        // session_start();
        // $_SESSION['UsuarioValido']= $nombreUsuario;

        echo "Bienvenido " . $nombreUsuario;
        echo'
        <script>window.location.href="idexAdmin.php"</script>';
    }else {
        echo "Usuario y/o contraseña incorrecta";
    }
?>