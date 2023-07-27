<?php
// set the default timezone to use.
date_default_timezone_set('UTC');

$nombre = $_POST['nombre'];
$email =  $_POST['email'];
$asunto =  $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$destinatario = "guido.varela@gmail.com";
$fechaEnvio = date("d-m-Y H:i");
// asunto
$cuerpoMensaje = "<p>Nombre: ".$nombre."<br> Email: ".$email."<br> Mensaje: ".$mensaje."</p>Enviado el ".$fechaEnvio;

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Cabeceras adicionales
$cabeceras .= 'To:'.$destinatario;
$cabeceras .= 'From: '. $nombre.'<'.$email.'>' . "\r\n";

// 3) envio de datos
@$envio1 = mail($destinatario,$asunto,$cuerpoMensaje, $cabeceras);

// 4) Evaluacion del envio
if($envio1 === false){
    echo "<span class='alert alert-success'>Gracias ".$nombre." por su mensaje. Nos podremos en contacto a la brevedad</span>";
} else{
    echo "<span class='alert alert-danger'>Error en el envío.  Escribanos a ".$destinatario."</span>";
} 
?>