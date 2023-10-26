<?php
include('conex.php'); // Asegúrate de que el archivo de conexión esté incluido

$productos = []; // Un array para almacenar los resultados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
    $venta = isset($_POST['venta']) ? $_POST['venta'] : 'todos';
    $habitacion_piso = isset($_POST['habitacion-piso']) ? $_POST['habitacion-piso'] : 'todos';
    $ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : 'todos';
    $precio = isset($_POST['precio']) ? $_POST['precio'] : 50;
    $orden = isset($_POST['orden']) ? $_POST['orden'] : 'mas_caro';

    // Construir la consulta SQL según los filtros seleccionados
    $sql = "SELECT * FROM productos WHERE ";
    $sql .= "nombre LIKE '%$busqueda%' ";

    if ($venta != 'todos') {
        $sql .= "AND venta = '$venta' ";
    }

    if ($habitacion_piso != 'todos') {
        $sql .= "AND habitacion_piso = '$habitacion_piso' ";
    }

    if ($ubicacion != 'todos') {
        $sql .= "AND ubicacion = '$ubicacion' ";
    }

    if ($orden == 'mas_caro') {
        $sql .= "ORDER BY precio DESC";
    } elseif ($orden == 'mas_barato') {
        $sql .= "ORDER BY precio ASC";
    }

    // Ejecutar la consulta
    $resultado = mysqli_query($conectar, $sql);

    // Almacenar los resultados en el array $productos
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $productos[] = $fila;
    }

    mysqli_close($conectar);
}
?>





<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleFooter.css">
    <link rel="stylesheet" type="text/css" href="css/content.css">
</head>
<body>
<div class="container" data-aos="fade-right">
    <!-- Tu contenido anterior aquí -->

    <nav>
        <img src="img/LOGO_INSA.png" class="logo">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php">compra</a></li>
            <li><a href="index.php">renta</a></li>
            <li><a href="index.php">conocenos</a></li>
        </ul>
        <button class="btn"><img src="img/icon.png">Contactanos</button>
    </nav>

    <center>
        <div class="container1">
            <label class="labelsuperior">Buscar una oferta</label>
            <label class="labelinferior">Elije la oferta con más ventaja, puede ser tuya</label>
        </div>
        <div class="container2">
    <form id="formularioBusqueda" method="post">
        <input type="text" name="busqueda" id="busqueda" placeholder="palabra">
        <input type="submit" value="Buscar" class="boton-buscar">
    </form>
</div>

        <div class="container3">
            <p for="venta">Venta:</p>
            <select name="venta" id="venta">
                <option value="opcion1">No</option>
                <option value="opcion1">Sí</option>
                <option value="opcion1">venta</option>
            </select>

            <p for="habitacion-piso">Habitación-Piso:</p>
            <select name="habitacion-piso" id="habitacion-piso">
                <option value="opcion1">hab 1</option>
                <option value="opcion2">hab 2</option>
                <option value="opcion3">hab 3</option>
                <option value="opcion3">habitacion-piso</option>
            </select>

            <p for="ubicacion">Ubicación:</p>
            <select name="ubicacion" id="ubicacion">
                <option value="opcion1">cancun</option>
                <option value="opcion2">tulum</option>
                <option value="opcion3">Opción 3</option>
                <option value="opcion4">ubicacion</option>
            </select>
            <p for="orden">Ordenar por:</p>
            <select name="orden" id="orden">
                <option value="mas_caro">Más caro</option>
                <option value="mas_barato">Más barato</option>
            </select>
        </div>
        <div class="container4">
            <input type="range" name="precio" id="precio" min="0" max="100" value="50">
              </div>
    </center>

   <center> <div class="container5">
    <?php
    // Mostrar los resultados en contenedores de 3x3
    $contador = 0;
    foreach ($productos as $producto) {
        if ($contador % 3 == 0) {
            echo '<div class="row">';
        }
        echo '<div class="producto">';
        echo '<img src="' . $producto['imagen'] . '" alt="Imagen del producto">';
        echo '<h3>' . $producto['nombre'] . '</h3>';
        echo '<p>Precio: $' . $producto['precio'] . '</p>';
        // Mostrar otros campos según tu base de datos
        echo '</div>';
        $contador++;
        if ($contador % 3 == 0) {
            echo '</div>';
        }
    }
    ?>
</div>

    </center>
    <br>
    <div class="contenedor-padre">
        <div class="contenedor-100">
            <img src="img/avion.png" alt="Imagen de avión" />
            <div class="centrar-vertical">
                <br>
                <label for="miInput">Suscribete al boletín</label>
                <label for="miInput">recibe las ultimas novedades y ofertas interesantes e inmobiliarias</label>
                <div class="centrarinput">
                    <input type="text" id="miInput" name="miInput">
                    <button type="button">Suscribe</button>
                </div>
            </div>
        </div>
        <div class="contenedor-25"></div>
    </div>
</body>
</html>
