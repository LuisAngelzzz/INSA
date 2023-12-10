<?php
// Conexión a la base de datos (ajusta los datos según tu configuración)
$host = "localhost";
$user = "root";
$clave = "";
$bd  = "insadb";

$conn = new mysqli($host, $user, $clave, $bd);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"]) && isset($_POST["activo"])) {
    $nombre = $_POST["nombre"];
    $activo = $_POST["activo"];

    // Realiza la actualización en la base de datos (ajusta según tu estructura)
    $sql_update = "UPDATE gerente SET activo = $activo WHERE nombreUsuario = '$nombre'";

    if ($conn->query($sql_update) === TRUE) {
        echo $activo; // Devuelve el nuevo estado para que el JavaScript lo refleje
    } else {
        echo "Error al actualizar: " . $conn->error;
    }
} else {
    echo "Solicitud incorrecta";
}

// Cierra la conexión
$conn->close();
?>
