<?php
    session_start();

    if (isset($_SESSION['UsuarioValido'])) {
        session_unset(); //Destruye la variable de sesion
        session_destroy(); //Destruye la sesion

        echo'
        <script>
        window.location.href="../../idex.html"
        </script>';
    }else{
        echo 'No has iniciado sesion';
    }
?>