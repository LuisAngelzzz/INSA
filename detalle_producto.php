<?php
include('conex.php');

// Obtener el ID del producto desde la URL
$id_producto = isset($_GET['id']) ? $_GET['id'] : 0;

// Obtener la información del producto específico
$sql_detalle_producto = "SELECT * FROM propiedades WHERE id = $id_producto";
$resultado_detalle_producto = mysqli_query($conn, $sql_detalle_producto);
$producto_detalle = mysqli_fetch_assoc($resultado_detalle_producto);

// Obtener los detalles correspondientes al producto
$sql_detalles = "SELECT * FROM propiedades WHERE id = $id_producto";
$resultado_detalles = mysqli_query($conn, $sql_detalles);
$detalles_producto = mysqli_fetch_assoc($resultado_detalles);

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/styless.css">
<link rel="stylesheet" type="text/css" href="css/Footer.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <style>
  .slick-prev, .slick-next {
    background-color: #0c1774; /* Color de fondo azul */
    color: white; /* Color del texto blanco */
    border: none; /* Sin borde */
    border-radius: 50%; /* Forma redonda */
    width: 37px; /* Ancho del botón */
    height: 37px; /* Altura del botón */
    font-size: 20px; /* Tamaño del texto */
    margin-right: -20px; /* Ajusta el margen derecho del botón previo (negativo) */
    margin-left: -20px; /* Ajusta el margen izquierdo del botón siguiente (negativo) */
    opacity: 1;
  }

  .slick-prev:hover, .slick-next:hover {
    background-color: #fab059; /* Cambia el color al pasar el mouse */
    
  }
  
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
<br><br>
        <div class="detalle-producto">
            <a class="textoproducto"><?php echo $producto_detalle['titulo']; ?></a>
        </div>
        <br> 
        <div class="detalles">    
          
            <div class="detalles1">
            <img class="previstaimg" src="<?php echo $producto_detalle['url_foto_principal']; ?>" alt="Imagen del producto">
            <br><br>    
           
           
        <center>
                    <div>
                      <?php
                      function obtenerPropiedadPorId($id_propiedad)
                      {
                          //Obtenemos la propiedad en base al id que recibimos por GET
                          include("conex.php");
                      
                          //Armamos el query para seleccionar la propiedad
                          $query = "SELECT * FROM propiedades WHERE id='$id_propiedad'";
                      
                          //Ejecutamos la consulta
                          $resultado_propiedad = mysqli_query($conn, $query);
                          $propiedad = mysqli_fetch_assoc($resultado_propiedad);
                          return $propiedad;
                      }
                      //tomo el id que me recibí y busco la propiedad
                      $id_propiedad = $_GET['id'];
                      $propiedad = obtenerPropiedadPorId($id_propiedad);

                      function obtenerFotosGaleriaDePropiedad($id_propiedad)
                      {
                          include("conex.php");
                      
                          //Armamos el query para seleccionar las fotos
                          $query = "SELECT * FROM fotos WHERE id_propiedad='$id_propiedad' limit 3";
                      
                          //Ejecutamos la consulta
                          $galeria = mysqli_query($conn, $query);
                          return $galeria;
                      }
                      ?>
                        
                        <input type="hidden" id="fotosAEliminar" name="fotosAEliminar">
                        <div id="contenedor-fotos-publicacion">
                            <?php
                            $galeria = obtenerFotosGaleriaDePropiedad($propiedad['id']);
                            $i = 1; ?>
                            <?php while ($foto = mysqli_fetch_assoc($galeria)) : ?>
                                <output class="contenedor-foto-galeria" id="<?php echo $i ?>">
                                    <img src="fotos/<?php echo $propiedad['id'] . "/" . $foto['nombre_foto'] ?>" class="foto-galeria" style="width: 250px; height: 150px; border: 2px solid #333; border-radius: 10px; box-shadow: 3px 3px 5px #888888;" >
                                </output>
                            <?php
                                $i++;
                            endwhile
                            ?>
                        </div>

                    </div>
            <!--<div class="responsive">
    <div><img src="img/ejemplo.jpg" alt="Imagen 1"></div>
    <div><img src="img/ejemplo2.jpg" alt="Imagen 2"></div>
    <div><img src="img/ejemplo3.jpg" alt="Imagen 3"></div>
    <div><img src="img/ejemplo.jpg" alt="Imagen 4"></div>
    <div><img src="img/ejemplo2.jpg" alt="Imagen 5"></div>
    <div><img src="img/ejemplo3.jpg" alt="Imagen 6"></div>
    <div><img src="img/ejemplo.jpg" alt="Imagen 7"></div>
    <div><img src="img/ejemplo2.jpg" alt="Imagen 8"></div>
  </div> -->
        </center>
                
                <br> <br>
              <center>  <div class="especificaciones">
                    <img class="pnglogos" src="img/tipo.png" alt="Estado"><p style="display: inline;"><?php echo $detalles_producto['tipo']; ?></p>
                    <img class="pnglogos" src="img/metro.png" alt="Ubicacion"><p style="display: inline;"><?php echo $detalles_producto['dimensiones']; ?></p>
                    <img class="pnglogos" src="img/ubica.png" alt="tipo lugar"><p style="display: inline;"><?php echo $detalles_producto['estado']; ?></p>

                </div></center>
                <br> <br>
             <div class="rentade">
                <p class="txtrenta"><?php if( $propiedad['tipo'] == 'renta'){
                  echo 'Renta desde: $' . $producto_detalle['precio'] . ' / mes'; }
                  else {
                    echo 'Precio total: $' . $producto_detalle['precio'];
                  }?>
                  </p>

             </div>    
            </div>
            <form method="POST" class="custom-form contact-form" action="contacto-guardar.php" >
            <div class="detalles2">
                
               <center> <p class="depatext" style="font-weight: bold; font-size: 30px;">Contactanos</p> </center>
                
               <div class="contac1">
                <p class="depatext1">Nombre completo</p>
                <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" placeholder="Escribe tu nombre" required>

                <p class="depatext1">Numero de télefono</p>
                <input type="number"  name="numero_telefono" id="numero_telefono" class="form-control" placeholder="Escribe tu telefono" required>

                <p class="depatext1">Correo electronico</p>
                <input type="text" name="correo_electronico" id="correo_electronico" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Escribe tu correo electronico" required>
                <br><br>
                <!--
                <input type="checkbox" name="tarea1"> Acepto el tratamiento de datos<br> ㅤ personales
                <br><br> -->
                </div>
                <input type="hidden" name="titulo_producto" value="<?php echo $producto_detalle['titulo']; ?>">
                <center><button class="miboton" style="width: 80%;">Enviar Mensaje</button></center>
                <!--
<center><p class="depatext" style="font-weight: bold; font-size: 26px;">Redes Sociales</p>
</center>
<center><img src="img/twitter.png" class="imgredes">
<img src="img/fb.png" class="imgredes">
<img src="img/ig.png" class="imgredes">
<img src="img/wp.png" class="imgredes"></center>
                -->
            </div>
         
        </div><br>
        <div class="detalle-producto">

            <div class="detalles">    
          
                <div class="detalles1">
                <br> <br>
                 <a class="caracter">Características: </a>
                 <br> <br> <br>
                 <div class="textcaracter">
                 <a style="color: black !important;"><?php echo $producto_detalle['descripcion']; ?></a>  
                 <br><br><br>
                 <!-- Pruebas
                 <a class="caracter">Solucion diseño: </a><br><br>
                 <a style="color: black !important;"><?php echo $producto_detalle['Solucion_Disenio']; ?></a>  
                 <br><br><br>
                 <a class="caracter">Ejecución equipamiento: </a><br><br>
                 <a style="color: black;"><?php echo $producto_detalle['Ejecucion_Equipamiento']; ?></a>  
                 <br><br><br>
                -->
                 <a class="caracter">Localización: </a><br><br>
                 <a style="color: black;"><?php echo $producto_detalle['ubicacion']; ?></a>  
                 <br><br><br>
                 <!-- Pruebas
                 <a class="caracter">Opinión: </a><br><br>
                 <a style="color: black;"><?php echo $producto_detalle['Opinion']; ?>
                
                </a>  -->

                </div>
                </div>

                <div class="detalles2">
        <br>
        <a class="caracter" style="font-size: 30px;">Breves Características: </a>
        <br><br>
        <a class="detalletext" style="display: inline;">Estado:</a>
<p style="display: inline;"><?php echo $detalles_producto['estado']; ?></p>
<br><br>
<!-- Pruebas
<a class="detalletext" style="display: inline;">Calle:</a>
<p style="display: inline;"><?php echo $detalles_producto['calle']; ?></p>
<br><br>
-->
<a class="detalletext" style="display: inline;">Garaje:</a>
<p style="display: inline;"><?php echo $detalles_producto['garage']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Tipo:</a>
<p style="display: inline;"><?php echo $detalles_producto['tipo']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Habitaciones:</a>
<p style="display: inline;"><?php echo $detalles_producto['habitaciones']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Dimensiones:</a>
<p style="display: inline;"><?php echo $detalles_producto['dimensiones']; ?></p>
<br><br>
<!-- pruebas
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
-->
<a class="detalletext" style="display: inline;">Baños:</a>
<p style="display: inline;"><?php echo $detalles_producto['banios']; ?></p>
        <!-- Agrega más campos según sea necesario -->     
    <center> <p style="color: #fff !important; font-size: 28px;">Ubicación</p> 
 <a style="color: #002587 !important;"><?php echo $producto_detalle['link_u']; ?></a>
 </center>
    </div> 
            </div>
          
        </div>
 <div class="container__footer">
    <div class="box__footer">
        <div class="logo">
            <img src="img/LOGO_INSA.png" alt="">
        </div>
        <div class="terms">
          <p></p>
          
        </div>
    </div>
    <div class="box__footer">
        <h2>Redes Sociales</h2>
        <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
        <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
    </div>
  

    <div class="box__footer">
      <!--Pruebas
        <h2>Politicas</h2>
        <a href="#">Acerca de</a>
        <a href="#">Aviso de Privacidad</a>
        <a href="#">leyes</a>
        <a href="#">Servicios</a>       -->       
    </div> 

    
</div>

<div class="box__copyright">
    <hr>
    <p>Todos los derechos reservados © 2023 <b></b></p>
</div>    </div>   
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.responsive').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: true, /* Activa el modo central */
        centerPadding: '20px', /* Ajusta el espacio entre las imágenes */
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        responsive: [
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              centerMode: true, /* Desactiva el modo central en pantallas pequeñas */
            }
          }
        ]
      });
    });
  </script>
</body>
</html>
