<?php
include('conex.php');

// Obtener el ID del producto desde la URL
$id_producto = isset($_GET['id']) ? $_GET['id'] : 0;

// Obtener la información del producto específico
$sql_detalle_producto = "SELECT * FROM productos WHERE id = $id_producto";
$resultado_detalle_producto = mysqli_query($conectar, $sql_detalle_producto);
$producto_detalle = mysqli_fetch_assoc($resultado_detalle_producto);

// Obtener los detalles correspondientes al producto
$sql_detalles = "SELECT * FROM detalles WHERE id = $id_producto";
$resultado_detalles = mysqli_query($conectar, $sql_detalles);
$detalles_producto = mysqli_fetch_assoc($resultado_detalles);

mysqli_close($conectar);
?>


<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/styless.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <style>
   

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
<br>
        <div class="detalle-producto">
            <a class="textoproducto"><?php echo $producto_detalle['nombre']; ?></a>
        </div>
        <br> <br>
        <div class="detalles">    
          
            <div class="detalles1">
            <img class="previstaimg" src="<?php echo $producto_detalle['imagen']; ?>" alt="Imagen del producto">
            <br><br>    
           
           
         <center>   <div class="responsive">
    <div><img src="img/ejemplo.jpg" alt="Imagen 1"></div>
    <div><img src="img/ejemplo2.jpg" alt="Imagen 2"></div>
    <div><img src="img/ejemplo3.jpg" alt="Imagen 3"></div>
    <div><img src="img/ejemplo.jpg" alt="Imagen 4"></div>
    <div><img src="img/ejemplo2.jpg" alt="Imagen 5"></div>
    <div><img src="img/ejemplo3.jpg" alt="Imagen 6"></div>
    <div><img src="img/ejemplo.jpg" alt="Imagen 7"></div>
    <div><img src="img/ejemplo2.jpg" alt="Imagen 8"></div>
  </div></center>
                
                <br> <br>
              <center>  <div class="especificaciones">
                    <img class="pnglogos" src="img/tipo.png" alt="tipo lugar"><p style="display: inline;"><?php echo $detalles_producto['tipo_inmueble']; ?></p>
                    <img class="pnglogos" src="img/metro.png" alt="tipo lugar"><p style="display: inline;"><?php echo $detalles_producto['area']; ?>m²</p>
                    <img class="pnglogos" src="img/ubica.png" alt="tipo lugar"><p style="display: inline;"><?php echo $detalles_producto['ciudad']; ?></p>

                </div></center>
                <br> <br>
             <div class="rentade">
                <p class="txtrenta">renta desde:<br><br>$<?php echo $producto_detalle['precio']; ?>/mes</p>
                <button class="buttondepa">Quiero rentar</button>
             </div>    
            </div>
            <div class="detalles2">
                
                <center><p class="depatext" style="font-weight: bold; font-size: 30px;">contactanos</p>
                <p class="depatext1">Nombre completo</p>
                <input type="text" id="miInput" name="miInput">
                <p class="depatext1">Numero de telefono</p>
                <input type="text" id="miInput" name="miInput">
                <p class="depatext1">E-mail</p>
                <input type="text" id="miInput" name="miInput">
                <br><br>
                <input type="checkbox" name="tarea1"> Acepto el tratamiento de datos<br> ㅤ personales
                <br><br>
                </center>
                <center><button class="miboton">Send Message</button> </center>
<center><p class="depatext">Redes Sociales</p></center>
<center><img src="img/twitter.png" class="imgredes">
<img src="img/fb.png" class="imgredes">
<img src="img/ig.png" class="imgredes">
<img src="img/wp.png" class="imgredes"></center>
            </div>
         
        </div>
        <div class="detalle-producto">

            <div class="detalles">    
          
                <div class="detalles1">
                <br> <br>
                 <a class="caracter">Caracteristicas: </a>
                 <br> <br> <br>
                 <div class="textcaracter">
                 <a style="color: #002587 !important;"><?php echo $producto_detalle['caracteristicas']; ?></a>  
                 <br><br><br>
                 <a class="caracter">Opinion: </a><br><br>
                 <a style="color: #002587 !important;"><?php echo $producto_detalle['Opinion']; ?></a>  
                 <br><br><br>
                 <a class="caracter">Localizacion: </a><br><br>
                 <a style="color: #002587 !important;"><?php echo $producto_detalle['Localizacion']; ?></a>  
                 <br><br><br>
                 <a class="caracter">Ejecucion equipamiento: </a><br><br>
                 <a style="color: #002587 !important;"><?php echo $producto_detalle['Ejecucion_Equipamiento']; ?></a>  
                 <br><br><br>
                 <a class="caracter">Solucion diseño: </a><br><br>
                 <a style="color: #002587 !important;"><?php echo $producto_detalle['Solucion_Disenio']; ?></a>  

                </div>
                </div>

                <div class="detalles2">
        <br>
        <a class="caracter" style="font-size: 30px;">Breves Caracteristicas: </a>
        <br><br>
        <a class="detalletext" style="display: inline;">Ciudad:</a>
<p style="display: inline;"><?php echo $detalles_producto['ciudad']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Calle:</a>
<p style="display: inline;"><?php echo $detalles_producto['calle']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Estacionamiento:</a>
<p style="display: inline;"><?php echo $detalles_producto['estacionamiento']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Tipo:</a>
<p style="display: inline;"><?php echo $detalles_producto['tipo_inmueble']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Habitaciones:</a>
<p style="display: inline;"><?php echo $detalles_producto['no_hab']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Área:</a>
<p style="display: inline;"><?php echo $detalles_producto['area']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Total área:</a>
<p style="display: inline;"><?php echo $detalles_producto['total_a']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Objeto aislado:</a>
<p style="display: inline;"><?php echo $detalles_producto['objeto']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Balcón:</a>
<p style="display: inline;"><?php echo $detalles_producto['balcon']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Terraza:</a>
<p style="display: inline;"><?php echo $detalles_producto['terraza']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Baños:</a>
<p style="display: inline;"><?php echo $detalles_producto['no_baño']; ?></p>
        <!-- Agrega más campos según sea necesario -->
    </div>    
            </div>
         
        </div>

<footer>
        <?php include('footer.php'); ?>
    </footer>
    </div>   
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.responsive').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: true, /* Activa el modo central */
        centerPadding: '20px', /* Ajusta el espacio entre las imágenes */
        prevArrow: '<button type="button" class="slick-prev">&#60;</button>',
        nextArrow: '<button type="button" class="slick-next">&#62;</button>',
        responsive: [
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              centerMode: false, /* Desactiva el modo central en pantallas pequeñas */
            }
          }
        ]
      });
    });
  </script>
</body>
</html>
