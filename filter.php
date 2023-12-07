<?php
include('conex.php'); // Asegúrate de que el archivo de conexión esté incluido

$productos = []; // Un array para almacenar los resultados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
    $venta = isset($_POST['tipoperacion']) ? $_POST['tipoperacion'] : '';
    $ubicacion = isset($_POST['ubicacion']) ? $_POST['ubicacion'] : '';
    $precio = isset($_POST['precio']) ? $_POST['precio'] : 50;
    $orden = isset($_POST['orden']) ? $_POST['orden'] : 'mas_caro';

    // Construir la consulta SQL según los filtros seleccionados
    $sql = "SELECT * FROM propiedad ";
    $sql .= "WHERE ubicacion LIKE '%$busqueda%' ";

    if ($venta != '') {
        $sql .= "AND tipoperacion = '$venta' ";
    }

    if ($ubicacion != '') {
        $sql .= "AND ubicacion = '$ubicacion' ";
    }

    if ($orden == 'Más caro') {
        $sql .= "ORDER BY precio DESC";
    } elseif ($orden == 'Más barato') {
        $sql .= "ORDER BY precio asc";
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
    <title>Catalogo principal</title>
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
            <form id="formularioBusqueda" method="POST" action="filter.php">
                <input type="text" name="busqueda" id="busqueda" placeholder="palabra">
                <input type="submit" value="Buscar" class="boton-buscar">
            
        </div>
        <div class="container3">
            <p for="tipoperacion">Venta:</p>
            <select name="tipoperacion" id="tipoperacion">
                <?php if($venta != ''){ ?>
                <option value="<?php echo $venta; ?>"><?php echo $venta; ?></option>
                <?php } ?>
                <option value="">Todos</option>
                <option value="renta">renta</option>
                <option value="venta">venta</option>
                
            </select>
            <p for="ubicacion">Ubicación:</p>
            <select name="ubicacion" id="ubicacion">
                <?php if($ubicacion != ''){ ?>
                <option value="<?php echo $ubicacion; ?>"><?php echo $ubicacion; ?></option>
                <?php } ?>
                <option value="">Todos</option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California Sur">Baja California Sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Chiapas">Chiapas</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                <option value="Colima">Colima</option>
                <option value="Durango">Durango</option>
                <option value="Estado de México">Estado de México</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo León">Nuevo León</option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Querétaro">Querétaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosí">San Luis Potosí</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                <option value="Yucatán">Yucatán</option>
                <option value="Zacatecas">Zacatecas</option>
                
            </select>
            <p for="orden">Ordenar por:</p>
            <select name="orden" id="orden">
                <?php if($orden != ''){ ?>
                <option value="<?php echo $orden; ?>"><?php echo $orden; ?></option>
                <?php } ?>
                <option value="Más caro">Más caro</option>
                <option value="Más barato">Más barato</option>
            </select>
        </div>
        
        <div class="container4">
            <input type="range" name="precio" id="precio" min="0" max="100" value="50">
        </div>
        </form>
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
        echo '<img src="' . $producto['foto'] . '" alt="Imagen del producto">';
        echo '<h3>' . $producto['ubicacion'] . '</h3>';
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
    
</body>
<footer>
        <?php include('footer.php'); ?>
    </footer>
</html>
