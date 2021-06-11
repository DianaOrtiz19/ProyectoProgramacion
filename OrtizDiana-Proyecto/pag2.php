<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nestle | Unete</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon"  href="icono.ico">
</head>
<body>
    <header class="header">
        <div id="encabezado">
            <div id="logo">
                Nestle
            </div>
            <div id="menu">
                <ul>
                    <li> <a href="Index.html" class="enlace"> Inicio </a></li>
                    <li> <a href="pag1.html" class="enlace"> Productos </a></li>
                    <li> <a href="pag2.html" class="active"> Unete </a></li>
                    <li> <a href="pag3.html" class="enlace"> Contactanos </a></li>
                </ul>
            </div>
        </div>

    </header>
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
$salto = " ";
$asunto = "Hola ".$nom.$salto.$ape;
$msg = "Gracias por unirse! segun el formulario usted es de ".$pais.$salto.$estado.", como agradecimiento por sumarse a nuestras filas de cliente le enviaremos unos productos de su eleccion ";


echo $asunto."<br>";
echo $msg;


?>
    <section class="form-register">
        <form accion="vali.php"  method="GET">
        <h4>Formulario Registro</h4>
        <input class="controls" type="text" name="nombre"  placeholder="Ingrese su Nombre">
        <input class="controls" type="text" name="apellido"  placeholder="Ingrese su Apellido">
        <input class="controls" type="text" name="dia"  placeholder="Dia de Nacimiento">
        <input class="controls" type="text" name="mes"  placeholder="Mes de Nacimiento">
        <input class="controls" type="text" name="año"  placeholder="Año de Nacimiento">
        <input class="controls" type="text" name="pais"  placeholder="Ingrese su Pais">
        <input class="controls" type="text" name="estado"  placeholder="Ingrese su Estado">
        <input class="controls" type="email" name="correo"  placeholder="Ingrese su Correo">
        <input class="controls" type="password" name="contra"  placeholder="Ingrese su Contraseña">
        <input class="controls" type="password" name="contraConfir"  placeholder="Confirme su Contraseña">
        <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
        <input class="botons" type="submit" value="Registrar">
        <p><a href="#">¿Ya tengo Cuenta?</a></p>
        </form>
      </section>
     

</body>
</html>