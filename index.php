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
//angel// 
<body>
    <div class="container" data-aos="fade-right">
        <nav>
            <img src="img/LOGO_INSA.png" class="logo">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Comprar</a></li>
                <li><a href="#">Rentar</a></li>
                <li><a href="#">Conocenos</a></li>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>