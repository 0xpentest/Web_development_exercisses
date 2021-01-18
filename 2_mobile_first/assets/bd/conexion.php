<?php
    $servername = "localhost";
    $database = "clientes";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Conectado con la Base de Datos";
    //mysqli_close($conn);
?>