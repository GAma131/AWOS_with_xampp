<?php
    include_once('../modelo/ConexionBD.php');
    $objConexionBD = new ConexionBD('localhost:3306','root','28082003','loginbd');
    $objConexionBD -> conectarBD();
?>