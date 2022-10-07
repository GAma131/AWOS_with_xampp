<?php
$servername = "localhost";
$username = "root";
$password = "28082003";
$dbname = "loginbd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //* insert row 1
    $nombre = "John";
    $APaterno = "Doe";
    $AMaterno = "Perez";
    $email = "john@example.com";
    $telefono = "7731239998";
    $estatus = "1";

    // prepare sql and bind parameters
    $stmt = $conn->prepare("call loginbd.sp_InsertarUsuario(:nombre, :APaterno, :AMaterno, :email, :telefono, :estatus);");

    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':APaterno', $APaterno);
    $stmt->bindParam(':AMaterno', $AMaterno);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':estatus', $estatus);

    $stmt->execute();


    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;