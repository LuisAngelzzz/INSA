<?php

$host = "localhost";
$user = "root";
$clave = "";
$bd  = "insadb";

$conn = new mysqli($host, $user, $clave, $bd);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"]) && isset($_POST["activo"])) {
    $nombre = $_POST["nombre"];
    $activo = $_POST["activo"];

    $sql_update = "UPDATE infousuario SET activo = $activo WHERE nombreUsuario = '$nombre'";

    if ($conn->query($sql_update) === TRUE) {
        echo $activo; 
    } else {
        echo "Error al actualizar: " . $conn->error;
    }
} else {
    echo "Solicitud incorrecta";
}

// Cierra la conexión
$conn->close();
?>
