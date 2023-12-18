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
    <title>Contactanos</title>
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
        <p>En INSA, nos enorgullece darle la bienvenida a un mundo de exclusividad y elegancia en bienes raíces. Somos más que una empresa inmobiliaria; somos su socio confiable en la búsqueda y adquisición de propiedades de alto valor. Nos dedicamos a ofrecer experiencias inigualables, conectando a nuestros clientes con residencias que reflejan su estilo de vida y aspiraciones.</p>
       <p> Para consultas, no dude en ponerse en contacto con nuestro equipo dedicado. Estamos aquí para convertir sus sueños inmobiliarios en una realidad.</p>
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
              <p>El Pueblito, Corregidora,<br/> Qro, <br/>C.P. 76904</p>
              
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Telefono</h4>
              <p>442 826 9910</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Correo Electronico</h4>
             <p>ventas@insainmobiliaria.com</p>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59747.365145082535!2d-100.41801841310462!3d20.620282274958075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b8fdc5b9255%3A0x97b094aa561b832f!2sSantiago%20de%20Quer%C3%A9taro%2C%20Qro.!5e0!3m2!1ses-419!2smx!4v1701359347536!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>


</body>
</html>