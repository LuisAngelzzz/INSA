<?php
// Conexión a la base de datos (reemplaza con tus propios detalles)
$host = "localhost";
$user = "root";
$clave = "";
$bd  = "insadb";

$conn = new mysqli($host, $user, $clave, $bd);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id = $_POST['id'];
$nuevoNombreUsuario = $_POST['nombreUsuario'];
$nuevaContrasena = $_POST['contraseña'];

// Validar y procesar los datos (aquí deberías implementar tus propias validaciones)

// Actualizar la base de datos
$sql = "UPDATE infoUsuario SET nombreUsuario = '$nuevoNombreUsuario', contraseña = '$nuevaContrasena' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
