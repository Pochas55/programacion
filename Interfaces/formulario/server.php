<?php
//print 'Hola AJAX con PHP';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$comentarios = $_POST['comentarios'];

//print "<p>$nombre<br>$email<br>$asunto<br>$comentarios</p>";

$headers = "From: $nombre <j@bextlan.com>";

/*
Función mail nativa
    http://php.net/manual/es/function.mail.php

Librería PHPMailer
    https://github.com/PHPMailer/PHPMailer

Ejemplos de cabeceras
    $headers= "MIME-Version: 1.0\r\n";
    $headers.= "Content-type: text/html; charset=utf-8\r\n";
    $headers.= "From: Entrena Tu Glamour <no-reply@glamour.mx>\r\n";
    $headers.= "Bcc: Jonathan MirCha <jonmircha@gmail.com>, Valeria Carreño <valeria.carreno@condenast.com.mx>\r\n";
*/

$send_mail = mail($email, $asunto, $comentarios, $headers);

/*
if( $send_mail ) {
    //codigo para insertar a la bd
    //mensaje para el front
} else  {
    //mensaje para el front
}
*/

print ( $send_mail ) ? 'Tus Datos han sido enviados' : 'Error al enviar tus datos';