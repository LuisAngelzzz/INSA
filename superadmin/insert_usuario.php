<?php


$host = "localhost";
$user = "root";
$clave = "";
$bd  = "insadb";

$conn = new mysqli($host, $user, $clave, $bd);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nuevoNombreUsuario = $_POST['nuevoNombreUsuario'];
$nuevaContraseña = $_POST['nuevaContraseña'];


$sql = "INSERT INTO admin ( NombreUsuario, password) VALUES ('$nuevoNombreUsuario', '$nuevaContraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario agregado correctamente";
    header ("Location:superAdmin.php");
} else {
    echo "Error al agregar el usuario: " . $conn->error;
}

$conn->close();
?>