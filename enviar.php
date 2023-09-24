<?php 
$destinatario = "javisolrac98@gmail.com";

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

$headers="Enviando desde mi Portafolio";
$mensajeCompleto=$mensaje."/nAtentamnete: ".$nombre;


mail($destinatario,$headers,$mensajeCompleto);
echo"<script>alert('correo enviado exitosamente')</scripr>";
echo"<script> setTimeout(\"locatio.href='index.html'\",1000)</scripr>";
?> 

