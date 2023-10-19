<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla principal</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="container" data-aos="fade-right">
        <nav>
            <img src="img/LOGO_INSA.png" class="logo">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Comprar</a></li>
                <li><a href="#">Rentar</a></li>
                <li><a href="quienes-somos.php">Conocenos</a></li>
                <li><a href="login.php">Iniciar Sesion</a></li>
            </ul>
            <button class="btn"><img src="img/icon.png">Contactanos</button>
        </nav>
        <div class="content">
            <h1>Vida<br> moderna para todos</h1>
            <p>Brindamos un servicio completo para la venta, compra o alquiler de bienes inmuebles.
                Llevamos mas de 15 años en el mercado.
            </p>
                 <form>
                    <input type="text" placeholder="📍 Ubicacion">
                    <button type="submit" class="btn">Buscar</button>

                 </form>
        </div>
    </div>

    <div class="container-ofertas">
    <div class="content-ofers">
            <h2>Mejores Ofertas</h2>
            <p>Cumple tus sueños profesionales, disfruta al maximo de todos tus logros<br>
            del centro de la ciudad y de las viviendas de lujo
            </p>
            <a href="#" class="mostrar">Mostrar todo</a>
            <div class="progress-bar">
  <div class="progress-fill"></div>
</div>


    </div>
    <br>
    <div class="button-container">
    <button class="carousel-button prev" onclick="scrollCarousel(-1)"> &#10094;</button>
    <button class="carousel-button next" onclick="scrollCarousel(1)"> &#10095; </button>
 
  </div>
  <br><br> 

<div class="carousel-container">

    
<div class="carousel">
    <div class="carousel-item">
       <div class="card">
    
       <a href="tu_url_destino.html" class="boton-enlace">
      <img src="img/casa-1.jpg" alt="Titulo de la tarjeta">
        </a>
         <div class="card-content">
         <h3>Amplio apartamento de 4 habitaciones
        con un hermoso<br> jardin y estacionamiento</h3>
       <h3 class="price" style="color:#005bad">$300,000.00</h3>
      <p>CDMX</p>
         </div>
       </div>
    </div>
    <!-- Repetir este div para cada tarjeta del carrusel -->
    <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-2.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
          <h3>Casa con alberca,pequeña terraza<br> 
          y area de descanso</h3>
       <h3 class="price" style="color:#005bad">$600,000.00</h3>
      <p>Guerrero</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-3.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
          <h3>Casa de dos torres,con terminados<br> 
          marmol</h3>
       <h3 class="price" style="color:#005bad">$200,100.00</h3>
      <p>Edo.Mex</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-4.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
          <h3>Casa para descanso con amplio Jardin<br> 
          cuenta con atico</h3>
       <h3 class="price" style="color:#005bad">$500,100.00</h3>
      <p>Toluca</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-5.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
            <h2>Titulo de la tarjeta</h2>
            <p>Descripción de la tarjeta</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-1.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
            <h2>Titulo de la tarjeta</h2>
            <p>Descripción de la tarjeta</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
        
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-1.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
            <h2>Titulo de la tarjeta</h2>
            <p>Descripción de la tarjeta</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
        
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-1.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
            <h2>Titulo de la tarjeta</h2>
            <p>Descripción de la tarjeta</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
        
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-1.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
            <h2>Titulo de la tarjeta</h2>
            <p>Descripción de la tarjeta</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
        
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-1.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
            <h2>Titulo de la tarjeta</h2>
            <p>Descripción de la tarjeta</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
        
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-1.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
            <h2>Titulo de la tarjeta</h2>
            <p>Descripción de la tarjeta</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
        
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-1.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
            <h2>Titulo de la tarjeta</h2>
            <p>Descripción de la tarjeta</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->
        
     <div class="carousel-item">
        <div class="card">
        <a href="tu_url_destino.html" class="boton-enlace">
          <img src="img/casa-1.jpg" alt="Titulo de la tarjeta">
        </a>
          <div class="card-content">
            <h2>Titulo de la tarjeta</h2>
            <p>Descripción de la tarjeta</p>
          </div>
        </div>
     </div>
     <!-- Repetir este div para cada tarjeta del carrusel -->

        

        
   </div>
</div>
</div>
<br><br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

<script>
let currentIndex = 0;
const carousel = document.querySelector(".carousel");
const carouselItems = document.querySelectorAll(".carousel-item");
const progressBar = document.querySelector(".progress-fill");

function scrollCarousel(direction) {
  currentIndex += direction;
  currentIndex = Math.min(Math.max(currentIndex, 0), carouselItems.length - 3);
  const translateX = -currentIndex * (carouselItems[0].offsetWidth + 16);
  carousel.style.transform = `translateX(${translateX}px)`;


  const totalItems = carouselItems.length - 3;
  const progress = (currentIndex / totalItems) * 100;
  progressBar.style.width = `${progress}%`;
}

    
</script>

</body>
<footer>
        <?php include('footer.php'); ?>
    </footer>
    
</html>