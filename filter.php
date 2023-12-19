<?php
include('conex.php'); // Asegúrate de que el archivo de conexión esté incluido

$productos = []; // Un array para almacenar los resultados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
    $venta = isset($_POST['tipo']) ? $_POST['tipo'] : '';
    $ubicacion = isset($_POST['estado']) ? $_POST['estado'] : '';
    $precio = isset($_POST['precio']) ? $_POST['precio'] : 50;
    $orden = isset($_POST['orden']) ? $_POST['orden'] : 'mas_caro';

    // Construir la consulta SQL según los filtros seleccionados
    $sql = "SELECT * FROM propiedades ";
    $sql .= "WHERE ubicacion LIKE '%$busqueda%' AND activo = 1 ";

    if ($venta != '') {
        $sql .= "AND tipo = '$venta' ";
    }

    if ($ubicacion != '') {
        $sql .= "AND estado = '$ubicacion' ";
    }

    if ($orden == 'Más caro') {
        $sql .= "ORDER BY precio DESC limit 9";
    } elseif ($orden == 'Más barato') {
        $sql .= "ORDER BY precio ASC limit 9";
    }

    // Ejecutar la consulta
    $resultado = mysqli_query($conn, $sql);

    // Almacenar los resultados en el array $productos
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $productos[] = $fila;
    }

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width"/>
    <meta charset="UTF-8">
    
    <title>Catalogo principal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Footer.css">
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
        <li><a href="index.php" style="color: black;">Inicio</a></li>
            <li><a href="index.php" style="color: black;">compra</a></li>
            <li><a href="index.php" style="color: black;">renta</a></li>
            <li><a href="index.php" style="color: black;">conocenos</a></li>
        </ul>
        <button class="btn">Contactanos</button>
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
        </div>

        <div class="container3">
            <p for="tipo">Venta:</p>
            <select name="tipo" id="tipo">
                <?php if($venta != ''){ ?>
                <option value="<?php echo $venta; ?>"><?php echo $venta; ?></option>
                <?php } ?>
                <option value="">Todos</option>
                <option value="renta">renta</option>
                <option value="venta">venta</option>
            </select>

            <p for="ubicacion">Ubicación:</p>
            <select name="estado" id="estado">
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

    <center>
    <style>
        .container5{
            margin-bottom: 100px;
            padding-bottom: 10px;
        }
    </style>
        <div class="container5">
            <?php
            $contador = 0;
            foreach ($productos as $producto) {
                if ($contador % 3 == 0) {
                    echo '<div class="row">';
                }
                echo '<div class="producto" data-habitaciones="' . $producto['habitaciones'] . '" data-estado="' . $producto['estado'] . '" data-descripcion="' . $producto['descripcion'] . '">';
                echo '<a href="detalle_producto.php?id=' . $producto['id'] . '">';
                echo '<img src="' . $producto['url_foto_principal'] . '" alt="Imagen del producto">';
                echo '<h3>' . $producto['titulo'] . '</h3>';
                echo '<a>' . $producto['estado'] . '</a>';
                echo '<p style="color: #darkblue";>' . $producto['precio'] . '$</p>';
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <style>
        .container__footer{
            margin-top: 100px;
            padding-top: 10px;
        }
    </style>
    
    
<div class="container__footer">
    
    <div class="box__footer">
        <div class="logo">
            <img src="img/LOGO_INSA.png" alt="">
        </div>
        <div class="terms">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit cum cumque velit libero officiis quam doloremque reprehenderit quae corporis! Delectus architecto officia praesentium atque laudantium, nam deleniti sapiente deserunt.</p>
        </div>
    </div>
  

    <div class="box__footer">
        <h2>Politicas</h2>
        <a href="#">Acerca de</a>
        <a href="#">Aviso de Privacidad</a>
        <a href="#">leyes</a>
        <a href="#">Servicios</a>              
    </div>

    <div class="box__footer">
        <h2>Redes Sociales</h2>
        <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
        <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
        <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
        <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
    </div>
</div>

<div class="box__copyright">
    <hr>
    <p>Todos los derechos reservados © 2023 <b></b></p>
</div>>
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
            var habitacionPiso = this.getAttribute('data-habitaciones');
            var ubicacion = this.getAttribute('data-ubicacion');
            var caracteristicas = this.getAttribute('data-caracteristicas');

            var info = 'habitaciones: ' + habitacionPiso + '\nUbicación: ' + ubicacion;

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
