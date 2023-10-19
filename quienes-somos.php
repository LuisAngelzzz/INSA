<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes somos</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="contenedor-qsomos" data-aos="fade-right">
        <nav>
            <img src="img/LOGO_INSA.png" class="logo">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Comprar</a></li>
                <li><a href="#">Rentar</a></li>
                <li><a href="login.php">Iniciar Sesion</a></li>
            </ul>
            <button class="btn"><img src="img/icon.png">Contactanos</button>
        </nav>
        <section>
            <div class="contenedor-tarjeta">
                <img src="img/q-somos.jpeg" alt="quienes somos">

                <div class="tarjeta">
                <h1>¿Quienes somos?</h1>
                <p>Una organizacion empresarial integrada por personas comprometidas con los principios de trabajo  en equipo,
                    entrega y dedicaciòn total a la empresa, profesionalismo y dominio tècnico, con el objeto de proporcionar
                    soluciones enfocadas a la construcciòn en los sectores inmobiliario, industrial, pùblico y privado.
                </p>
                </div>
                
            </div>

            <div class="contenedor-tarjeta">
                <div class="tarjeta">
                    <h1>Misión</h1>
                    <p>Participar en el desarrollo, construcciòn y operaciòn de infrestructura urbana, vivienda e industria, que 
                        nuestra sociedad demanda, siempre con vocaciòn de servicio al cliente, capacidad tècnica actualizada, ètica profesional y
                        calidad invariable en el cumplimiento de nuestros compromisos.
                    </p>

                    <h1>Visión</h1>
                    <p>Fortalecerse como una empresa visionaria, innovadora y creativa que nos lleve al crecimiento y mejoramiento continuo,
                        atavès de la eficiencia operativa, el buen manejo de los recursos y la calidad de nuestros servicios.
                    </p>
                </div>
                <img src="img/mision.jpg" alt="quienes somos">
                
            </div>

            <div class="contenedor-tarjeta">
                <img src="img/vision.jpeg" alt="quienes somos">
                <div class="tarjeta">
                    <h1>Valores</h1>
                    <p>Honestidad</p>
                    <p>Respeto</p>
                    <p>Confianza</p>
                    <p>Responsabilidad</p>
                    <p>Compromiso</p>

                    <h1>Capital Humano</h1>
                    <p> Nuestro Capital Humamano: Trabajar estrechamente con los requerimientos y alcances que nuestros clientes buscan,
                        comprendiendo las necesidades de cada proyecto y lograr capitalizarlos con soluciones integrales que innoven y optimicen la 
                        productividad de nuestros clientes.
                    </p>
                </div>
                
            </div>

        </section>

        <section>
            <div class="contenedor-estamos">
            <h1>¿Donde estamos?</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.4660414061545!2d-99.1825700259109!3d19.435463540591634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8ad94aba5ab%3A0xd416092c18a9ec2c!2sLeibnitz%20270%2C%20Anzures%2C%20Miguel%20Hidalgo%2C%2011590%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1697585162161!5m2!1ses!2smx" width="600" height="450" style="border: 5px solid #F88E12; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>

       
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
<footer>
        <?php include('footer.php'); ?>
    </footer>
</html>