<?php


include('conex.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conectar, $query);

    if (mysqli_num_rows($result) == 1) {
        // Inicio de sesión exitoso
        header('Location: inicio_exitoso.php');
    } else {
        // Error de inicio de sesión
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleFooter.css">
    <link rel="stylesheet" type="text/css" href="css/contacto.css">
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
    

    <div class="contacto">
        <div class="contactofondo">
            <label class="titulo">CONTACTO</label>
            <label class="generaltext">Añade la información solicitada para contactarnos</label>
            <br>
     
            <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <label class="required" for="name">nombre:</label>
                    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
                    <span id="name_validation" class="error_message"></span>
                </div>
                <div class="row">
                    <label class="required" for="email">email:</label>
                    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
                    <span id="email_validation" class="error_message"></span>
                </div>
                <div class="row">
                    <label class="required" for="phone">numero de celular:</label>
                    <input id="phone" class="input" name="phone" type="text" value="" size="30" /><br />
                    <span id="phone_validation" class="error_message"></span>
                </div>
                <div class="row">
                    <label class="required" for="message">mensaje:</label>
                    <textarea id="message" class="inputmessage" name="message" rows="7" cols="30"></textarea><br />
                    <span id="message_validation" class="error_message"></span>
                </div>
                <br>
                <input id="submit_button" class="button" type="submit" value="enviar mensaje">
            </form>
        </div>
    </div>

<br><br> 

    
<br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br><br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br><br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br><br>  <br>  <br>  <br>  <br>  <br>
<br><br>
    <div class="contenedor-padre">
        <div class="contenedor-100">
            <img src="img/avion.png" alt="Imagen de avión" />
            <div class="centrar-vertical">
                <br>
                <label for="miInput">Suscribete al boletin</label>
                <label for="miInput">recibe las ultimas novedades y ofertas interesantes e inmobiliarias</label>
                <div class="centrarinput">
                    <input type="text" id="miInput" name="miInput">
                    <button type="button">Suscribe</button>
                </div>
            </div>
        </div>
        <div class="contenedor-25"></div>
    </div>
  
</body>
</html>
