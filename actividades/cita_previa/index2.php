<?php
session_start();
if (!empty($_POST["departamento"]) && !empty($_POST["fecha"]) && !empty($_POST["hora"]) && !empty($_POST["nombre"]) && !empty($_POST["correo"]) && !empty($_POST["telefono"]) && !empty($_POST["mensaje"])) {
    $_SESSION["departamento"] = $_POST["departamento"];
    $_SESSION["fecha"] = $_POST["fecha"];
    $_SESSION["hora"] = $_POST["hora"];
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["telefono"] = $_POST["telefono"];
    $_SESSION["correo"] = $_POST["correo"];
    $_SESSION["mensaje"] = $_POST["mensaje"];
} else {
    header("Location:http://localhost:63342/htdocs/actividades/cita_previa/index.php?mns=Tienes que rellenar todos los campos");
}
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Cita Previa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<hr class="separador">
<div class="container">
    <div class="formulario">
        <p>Gracias por solicitar su Cita <b><?= $_SESSION["nombre"] . ". " ?></b> Recibirá un email en la dirección
            <b><?= $_SESSION["correo"] ?></b> para confirmar su cita con el Departamento
            de <b><?= $_SESSION["departamento"] . "." ?></b></p>
        <p>Datos de la Cita:</p>
        <p>Fecha: <b><?= $_SESSION["fecha"] ?></b></p>
        <p>Hora: <b><?= $_SESSION["hora"] ?></b></p>
        <div class="botones col-12">
            <a href="Cliente.php">
                <input class="button-27" value="Salir" id="finalizar" name="finalizar" type="button">
            </a>
        </div>
    </div>
</div>
<script src="js/script.js"></script>

</body>
</html>
<?php
$destinatario = $_SESSION["correo"];
$asunto = "Confirmación de tu Cita Previa";
$cuerpo = '
<html lang="es-ES">
<head>
   <title>Bienvenido a nuestra Web</title>
   <style>
   h1{
   color: dodgerblue;
   }
   p{
   color: black;
   }
</style>
</head>
<body>
<h1>¡Hola amigos!</h1>
<p>En breves nos pondremos en contacto con usted gracias por confiar en nosotros.</p>
</body>
</html>';

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
$headers = "From: $destinatario\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
//$headers = "Reply-To: j.morcillo@ceatformacion.com\r\n";

//ruta del mensaje desde origen a destino
$headers = "Return-path: j.morcillo@ceatformacion.com\r\n";

//direcciones que recibián copia
//$headers = "Cc: direccion@dominio.com\r\n";

//direcciones que recibirán copia oculta
//$headers = "Bcc: direccion@dominio.com,direccion@dominio.com\r\n";

mail($destinatario, $asunto, $cuerpo, $headers);
?>
