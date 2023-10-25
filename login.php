<?php
session_start();

if (isset($_POST['captcha'])) {
    $userInput = $_POST['captcha'];
    $captchaImage = $_SESSION['captcha_code'];

    if (strtoupper($userInput) === $captchaImage) {
        // CAPTCHA correcto
        $captchaMessage = "CAPTCHA correcto.";
    } else {
        // CAPTCHA incorrecto
        $captchaMessage = "CAPTCHA incorrecto. Inténtalo de nuevo.";
    }
} else {
    $captchaMessage = "";
}

include('conex.php');

$error_message = ""; // Variable para almacenar el mensaje de error

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conectar, $query);

    if(mysqli_num_rows($result) == 1) {
        // Inicio de sesión exitoso
        header('Location: inicio_exitoso.php');
    } else {
        // Error de inicio de sesión
        $error_message = "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/contacto.css">
    <style>
        .error-popup {
            display: none;
            position: fixed;
            top: 55%;
            left: 64%;
            transform: translate(-50%, -50%);
            background-color: #0c1774;
            color: white;
            padding: 10px;
            border-radius: 5px;
            opacity: 0;
            transition: opacity 0.5s;
        }
    </style>
</head>
<body>
<div class="container" data-aos="fade-right">
    <nav>
        <img src="img/LOGO_INSA.png" class="logo">
        <ul>
            <li><a href="index.php">Inicio</a></li>
        </ul>
        <button class="btn"><img src="img/icon.png">Contactanos</button>
    </nav>
    <br><br><br>
    <div id="contenedorprimario">
        <div id="izquierdo">
            <img src="img/logoINSA.png" class="logoINSA">
        </div>
        <div id="derecho">
            <div id="logincontenedor">
                <br><br>
                <img src="img/logo.png" class="logoI">
                <br>
                <label>Tu partner perfecto para el alquiler de tu casa</label>
                <h2>Iniciar Sesión</h2>
                <form method="post" action="login.php">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required><br>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required><br>
                    <div class="horizontal-center">

                        <input type="checkbox" id="recuerdame">
                        <label for="recuerdame">Recuérdameㅤㅤㅤㅤㅤㅤ</label>
                        <a class="black-link" href="pagina_de_olvidar_contrasena.html">Olvidaste tu contraseña</a>
                    </div>
                    <div id="centrar1">
                        <input type="submit" name="login" value="Iniciar Sesión">
                        <input type="submit" name="login" value="Registrarse">
                    </div>
                    <div id="centrar">
                        <label>O inicia sesión con:</label>
                        <a href="fb.com">
                            <img src="img/fb.png" width="50" height="50">
                        </a>
                        <a href="fb.com">
                            <img src="img/link.png" width="50" height="50">
                        </a>
                        <a href="https://fb.com">
                            <img src="img/google.png" width="50" height="50">
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </div>
<center>
       <div id="after_submit"><?php echo $captchaMessage; ?></div>
      <button id="open-captcha-modal" class="btn">CAPTCHA</button>
    <div id="captcha-modal" class="modal">
        <div class="modal-content">
            <span class="close" id="close-captcha-modal">&times;</span>
            <img src="captcha.php" alt="CAPTCHA Image">
            <form method="POST" action="verificar_captcha.php" id="captcha-form">
                <input type="text" name="captcha">
                <input type="submit" value="Verificar">
            </form>
        </div>
    </div>
   </center>
<br>
    <div id="mensaje-error-popup" class="error-popup">
        <?php echo $error_message; ?>
    </div>

    <script>
        // Mostrar el mensaje de error como un cuadro emergente flotante
        const errorPopup = document.getElementById('mensaje-error-popup');
        if (errorPopup.textContent.trim() !== '') {
            errorPopup.style.display = 'block';
            setTimeout(() => {
                errorPopup.style.opacity = '1';
                setTimeout(() => {
                    errorPopup.style.opacity = '0';
                    setTimeout(() => {
                        errorPopup.style.display = 'none';
                    }, 500);
                }, 2000); // Tiempo en milisegundos para que el mensaje se desvanezca
            }, 500);
        }

       // Obtén referencias a elementos del DOM
var openCaptchaButton = document.getElementById("open-captcha-modal");
var captchaModal = document.getElementById("captcha-modal");
var closeCaptchaButton = document.getElementById("close-captcha-modal");

// Función para mostrar el modal
function openCaptchaModal() {
    captchaModal.style.display = "block";
}

// Función para ocultar el modal
function closeCaptchaModal() {
    captchaModal.style.display = "none";
}

// Mostrar el modal al hacer clic en el botón
openCaptchaButton.addEventListener("click", openCaptchaModal);

// Ocultar el modal al hacer clic en el botón de cierre
closeCaptchaButton.addEventListener("click", closeCaptchaModal);

   
    </script>
</body>
</html>
