<?php
include('conex.php');

$productos = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
    $venta = isset($_POST['venta']) ? $_POST['venta'] : 'todos';
    $habitacion_piso = isset($_POST['habitacion-piso']) ? $_POST['habitacion-piso'] : 'todos';
    $ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : 'todos';
    $precio = isset($_POST['precio']) ? $_POST['precio'] : 50;
    $orden = isset($_POST['orden']) ? $_POST['orden'] : 'mas_caro';

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

    $resultado = mysqli_query($conectar, $sql);

    while ($fila = mysqli_fetch_assoc($resultado)) {
        $productos[] = $fila;
    }

    mysqli_close($conectar);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width"/>
    <meta charset="UTF-8">
    
    <title>Catalogo principal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleFooter.css">
    <link rel="stylesheet" type="text/css" href="css/content.css">
    <style>
        /* Agrega aquí tus estilos personalizados */
        
    </style>
</head>
<body>

<div class="container" data-aos="fade-right">
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

    <center>
        <div class="container5">
            <?php
            $contador = 0;
            foreach ($productos as $producto) {
                if ($contador % 3 == 0) {
                    echo '<div class="row">';
                }
                echo '<div class="producto" data-habitacion-piso="' . $producto['habitacion_piso'] . '" data-ubicacion="' . $producto['ubicacion'] . '" data-caracteristicas="' . $producto['caracteristicas'] . '">';
                echo '<a href="detalle_producto.php?id=' . $producto['id'] . '">';
                echo '<img src="' . $producto['imagen'] . '" alt="Imagen del producto">';
                echo '<h3>' . $producto['nombre'] . '</h3>';
                echo '<p>Precio: $' . $producto['precio'] . '</p>';
                echo '</a>';
                echo '</div>';
                $contador++;
                if ($contador % 3 == 0) {
                    echo '</div>';
                }
            }
            ?>
        </div>
    </center>

    <div class="ventana-emergente" id="ventanaEmergente">
        <div class="contenido-ventana">
            <h3 id="tituloVentana"></h3>
            <p id="infoVentana"></p>
        </div>
    </div>
<footer>
    <?php include('footer.php'); ?>
</footer>
</div>

<script>
    function mostrarVentanaEmergente(titulo, info, x, y) {
        var ventanaEmergente = document.getElementById('ventanaEmergente');
        ventanaEmergente.style.display = 'block';
        ventanaEmergente.style.top = y + 'px';
        ventanaEmergente.style.left = x + 'px';
        document.getElementById('tituloVentana').innerText = titulo;
        document.getElementById('infoVentana').innerText = info;
    }

    function ocultarVentanaEmergente() {
        document.getElementById('ventanaEmergente').style.display = 'none';
    }

    var productos = document.querySelectorAll('.producto');

    productos.forEach(function(producto) {
        producto.addEventListener('mouseenter', function(event) {
            var habitacionPiso = this.getAttribute('data-habitacion-piso');
            var ubicacion = this.getAttribute('data-ubicacion');
            var caracteristicas = this.getAttribute('data-caracteristicas');

            var info = 'Habitación-Piso: ' + habitacionPiso + '\nUbicación: ' + ubicacion;

            var rect = this.getBoundingClientRect();
            var x = rect.left + window.scrollX;
            var y = rect.top + window.scrollY;

            mostrarVentanaEmergente(this.querySelector('h3').innerText, info, x, y);
        });

        producto.addEventListener('mouseleave', ocultarVentanaEmergente);
    });
</script>


</body>

</html>
