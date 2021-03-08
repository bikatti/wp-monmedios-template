<?php

$name = $_POST['name'];
$asunto = $_POST['asunto'];
$email = $_POST['email'];
$message = $_POST['message'];

$adminmail = "info@monmedios.com"; //email destino
$subject = 'Formulario de contacto'; //asunto
$headers = "Reply-to: " . $name . " <" . $email . ">";

//Cuerpo del mensaje
$msg = "Nombre: " . $name . "\n";
$msg .= "E-mail: " . $email . "\n\n";
$msg .= "Interesado en: $asunto \n\nMensaje: \n\n $message \n";

mail( $adminmail, $subject, $msg);
echo "<script> setTimeout(\"location.href='/'\", 100000)</script>";

// wp_redirect( home_url('/') . "?sent=". $sendmail );