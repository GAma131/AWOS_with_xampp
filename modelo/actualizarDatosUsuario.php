<?php
    $servername = "localhost";
    $username = "root";
    $password = "28082003";
    $dbname = "loginbd";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // prepare sql and bind parameters
        $stmt = $conn->prepare("call loginbd.sp_actualizarUsuario(:id, :nombre, :APaterno, :AMaterno, :email, :telefono, :estatus);");

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':APaterno', $APaterno);
        $stmt->bindParam(':AMaterno', $AMaterno);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':estatus', $estatus);

        //* update row 1
        $id = "15";
        $nombre = "Pablo";
        $APaterno = "Pela";
        $AMaterno = "papas";
        $email = "pablito@example.com";
        $telefono = "7341793798";
        $estatus = "0";

        $stmt->execute();


        echo "Los cambios fueron exitosos ==> Datos: $id - $nombre - $APaterno - $AMaterno - $email - $telefono - $estatus";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>