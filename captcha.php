<?php
session_start();

// Crear una imagen CAPTCHA
$width = 200;
$height = 50;
$image = imagecreate($width, $height);

// Colores
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);

// Llenar el fondo
imagefill($image, 0, 0, $background_color);

// Generar una cadena aleatoria para el CAPTCHA
$captcha_code = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);

// Guardar el código CAPTCHA en la sesión
$_SESSION['captcha_code'] = $captcha_code;

// Dibujar el texto del CAPTCHA
imagestring($image, 5, 70, 15, $captcha_code, $text_color);

// Mostrar la imagen CAPTCHA
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
