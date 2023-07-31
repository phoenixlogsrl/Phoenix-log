<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$tel = $_POST['tel'];
$para = 'contacto@phoenix-log.com';
$titulo = 'Contacto Web';
$header = "From: contacto@phoenix-log.com\nReply-To:".$email."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";

$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Tel: $tel\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
	if (mail($para, $titulo, $msjCorreo, $header)) {
		echo "<script language='javascript'>
		alert('Mensaje enviado, muchas gracias.');
		window.location.href = 'http://phoenix-log.com/';
		</script>";
	} else {
		echo 'Falló el envio';
	}
}
?>