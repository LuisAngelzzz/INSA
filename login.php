 <?php
include('conex.php');

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
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>//angel// 
<!DOCTYPE html>
<html>
<head>
    <title>Inicio de aSesión</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

    <div id="check">
    <input type="checkbox" id="miCheckbox" name="miCheckbox" value="valor">

    <p> <label for="miCheckbox">Recuérdameㅤㅤㅤㅤㅤ</label></p> 
                <a href="olvidar_contrasena.php">¿Olvidaste tu contraseña?</a>
</div>



<div id="centrar1">
<input type="submit" name="login" value="Iniciar Sesión">
<input type="submit" name="login" value="Registrarse">
</div>

<div id="centrar">
<label>O inicia sesion con:</label>  
    <p></p>

<input type="submit" name="login" value="Facebook">
<input type="submit" name="login" value="Linked In">
<input type="submit" name="login" value="Google">      
</form>
</div>


                
            </div>
        </div>
    </div>
</body>
</html>
