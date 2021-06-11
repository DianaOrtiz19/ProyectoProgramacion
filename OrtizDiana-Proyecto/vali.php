<?php

$nom = $_GET["nombre"];
$ape = $_GET["apellido"];
$dia = $_GET["dia"];
$mes = $_GET["mes"];
$año = $_GET["año"];
$pais = $_GET["pais"];
$estado = $_GET["estado"];
$correo = $_GET["correo"];
$con = $_GET["contra"];
$asunto = "Hola ".$nom.$ape;
$msg = "Gracias por unirse! segun el formulario usted es de ".$pais.$estado.", como agradecimiento por sumarse a nuestras filas de cliente le enviaremos unos productos de su eleccion ";


echo $asunto."<br>";
echo $msg;


?>