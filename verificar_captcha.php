<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar el CAPTCHA
    $user_input = strtoupper($_POST['captcha']);
    $captcha_code = $_SESSION['captcha_code'];

    if ($user_input === $captcha_code) {
        // CAPTCHA válido, realiza las acciones necesarias y redirecciona
        // Puedes redirigir al usuario a una página específica después de la verificación
        header('Location: login.php#');
        exit();
    } else {
        echo "CAPTCHA incorrecto. Inténtalo de nuevo.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
