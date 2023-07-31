<?php
//cambiar el contenido entre comillas por la dirección de su dominio -A- la cual se desea enviar el mail
$correo="contacto@phoenix-log.com";
$MailFromAddress = "contacto@phoenix-log.com";

$_POST['subject']="Contacto Web";


   //estos campos no se envian al cuerpo del mensaje
    $hide = array("successfully", "errorOcurred", "subject", "captcha", "submit"); 

    //para cada campo enviado del formulario - si no son especiales se agregan al cuerpo
    foreach ($_POST as $key => $value) if (!in_array($key, $hide)) $body .= $key . ": " . $value. "\n";

    //se envia el mail
    mail($correo, $_POST['subject'], "From: $MailFromAddress", $body);

    //se direcciona a la pagina de agradecimiento
    header();

?>