<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla principal</title>
    <link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/Footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <div class="container" data-aos="fade-right">
        <nav>
            <img src="img/LOGO_INSA.png" class="logo">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="quienes-somos.php">Conocenos</a></li>
                <li><a href="login.php">Iniciar Sesion</a></li>
            </ul>
           <a href="tu_enlace_aqui" class="submit"><button class="btn">Contactanos</button></a>

        </nav>
        <div class="content">
            <h1>Vida<br> moderna para todos</h1>
            <p>Brindamos un servicio completo para la venta, compra o alquiler de bienes inmuebles.
                Llevamos mas de 15 años en el mercado.
            </p>
               <br><br>
                   
<a href="filter.php" class="submit"><button class="btn">Ver Catalogo</button></a>


        </div>
    </div>

 
</div>
<div class="container__footer">
    <div class="box__footer">
        <div class="logo">
            <img src="img/LOGO_INSA.png" alt="">
        </div>
        
    </div>
  

   

    <div class="box__footer2">
        <h2>Redes Sociales</h2>
        <a href="url_de_fb" target="_blank">

<a href="https://www.linkedin.com/company/insamexico/?viewAsMember=true" target="_blank">
    <img src="img/link.png" class="fab fa-instagram-square" style="width: 45px; height: 40px; margin: 4%;">
</a>

<a href="https://www.instagram.com/insa_qro/" target="_blank">
    <img src="img/ig.png" class="fab fa-instagram-square" style="width: 45px; height: 40px; margin: 4%;">
</a>

        

    </div>
</div>

<div class="box__copyright">
    <hr>
    <p>Todos los derechos reservados © 2023 <b></b></p>
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

    
</html>