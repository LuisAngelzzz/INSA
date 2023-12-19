<?php
require 'conex.php';

//VALIDAR DATOS

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre_completo = mysqli_real_escape_string($conn, $_POST['nombre_completo']);
    $numero_telefono = mysqli_real_escape_string($conn, $_POST['numero_telefono']);
    $correo_electronico = mysqli_real_escape_string($conn, $_POST['correo_electronico']);
    $titulo_producto = mysqli_real_escape_string($conn, $_POST['titulo_producto']); 

    if (empty($nombre_completo) || empty($numero_telefono) || empty($correo_electronico)) {
        echo "<script> alert('Todos los campos son obligatorios.');
        window.history.back();
        </script>";
        exit;
    }

    // Realizar la inserción en la base de datos
    $insertar = "INSERT INTO contacto (nombre_completo, numero_telefono, correo_electronico, titulo_producto) VALUES ('$nombre_completo', '$numero_telefono', '$correo_electronico', '$titulo_producto')";

    $query = mysqli_query($conn, $insertar);

    if ($query) {
        echo "<script> alert('Registro insertado correctamente.');
        location.href = 'filter.php';
        </script>";
    } else {
        echo "<script> alert('Error al insertar el registro: " . mysqli_error($conn) . "');
        window.history.back();
        </script>";
    }
} else {

    echo "<script> alert('Error: El formulario no se envió por el método POST.');
    window.history.back();
    </script>";
}

mysqli_close($conn);
?>
