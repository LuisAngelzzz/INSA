<?php
function obtenerTodasLosContactos()
{
    include("conexion.php");
    $query = "SELECT contacto.nombre_completo, contacto.numero_telefono, contacto.correo_electronico, contacto.titulo_producto
              FROM contacto";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }
    return $result;
}

$result = obtenerTodasLosContactos();
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>SAWPI - Admin</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div id="contenedor-admin">
        <?php include("contenedor-menu.php"); ?>

        <div class="contenedor-principal">
            <div id="listado-propiedades">
                <h2>Panel de vendedor</h2>
                <hr>
                <div class="contenedor-tabla"> 
                <table>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Numero de Telefono</th>
                            <th>Email</th>
                            <th>Propiedad</th> 
                        </tr>

                        <?php while ($contacto = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td><?php echo $contacto['nombre_completo']; ?></td>
                                <td><?php echo $contacto['numero_telefono']; ?></td>
                                <td><?php echo $contacto['correo_electronico']; ?></td>
                                <td><?php echo $contacto['titulo_producto']; ?></td>
                            </tr>
                        <?php endwhile ?>
                    </table>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
            

    <script>
        $('#link-dashboard').addClass('pagina-activa');
    </script>

</body>

</html>