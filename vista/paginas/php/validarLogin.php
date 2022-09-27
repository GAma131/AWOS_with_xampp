<?php
    echo "Bienvenido a PHP";
    $nombreUsuario;
    $claveUsuario;

    $nombreUsuario=$_REQUEST["txtUsuario"];
    $claveUsuario=$_REQUEST["txtClave"];

    if ($nombreUsuario=="Gama" && $claveUsuario=="1234") {
        session_start();
        $_SESSION['UsuarioValido']= $nombreUsuario;

        echo "Bienvenido " . $nombreUsuario;
        echo'
        <script>window.location.href="idexAdmin.php"</script>';
    }else {
        echo "Usuario y/o contraseña incorrecta";
    }
?>