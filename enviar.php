<?php
// Conecto mi form / name / con el server a traves de los name
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$celular = $_POST['celular'];
$mensaje = $_POST['mensaje'];
$carga = $_POST['carga'];



// Como funciona con el server
$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

// Como me a llegar el cuerpo del mail a mi, o sea lo que la gente escribió en el form
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "El asunto es: " . $celular . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "El cv es: " . $carga . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'cande.fdz12@gmail.com'; // El mail a donde van a llegar los mensajes
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header, $carga);

header('Location:index.html');

?>