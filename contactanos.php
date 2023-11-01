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
    <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
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
    

    <section>
    
    <div class="section-header">
      <div class="containers">
        <h2>Contactanos</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dignissimos eaque doloremque, nulla mollitia facilis temporibus ullam voluptas nostrum consequatur? Fugiat vitae sint quo est eveniet perspiciatis eum asperiores ipsam.</p>
      </div>
    </div>
    
    <div class="containers">
      <div class="row">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Direccion</h4>
              <p>56383 Ixtapaluca,<br/> Estado De Mexico, Mexico, <br/>55060</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Telefono</h4>
              <p>561-456-2321</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Correo Electronico</h4>
             <p>example@email.com</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <form action="" id="contact-form">
            <h2>Enviar Mensaje</h2>
            <div class="input-box">
              <input type="text" required="true" name="">
              <span>Nombre Completo</span>
            </div>
            
            <div class="input-box">
              <input type="email" required="true" name="">
              <span>Correo Electronico</span>
            </div>
            
            <div class="input-box">
              <textarea required="true" name=""></textarea>
              <span>Escribe tu mensaje...</span>
            </div>
            
            <div class="input-box">
              <input type="submit" value="Enviar" name="">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>


</body>
</html>
