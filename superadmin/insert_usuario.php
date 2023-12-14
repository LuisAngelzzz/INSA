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
$nuevoEmail = $_POST['nuevoEmail'];


$sql = "INSERT INTO infousuario ( NombreUsuario, email ,contraseña, privilegio) VALUES ('$nuevoNombreUsuario','$nuevoEmail' ,'$nuevaContraseña', '1')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario agregado correctamente";
    header ("Location:superAdmin.php");
} else {
    echo "Error al agregar el usuario: " . $conn->error;
}

$conn->close();
?>