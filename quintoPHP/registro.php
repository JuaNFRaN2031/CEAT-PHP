<title>Gracias por contactar</title>
<?php
    include 'header.php';
    $nombre = $_GET['nombre'];
    $email = $_GET['email'];
    $destinatario = $email;
    $asunto = "Bienvenido a nuestra Web";
    $cuerpo = '';
    //para el envío en formato HTML
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    //dirección del remitente
    $headers .= "From: $email\r\n";

    //dirección de respuesta, si queremos que sea distinta que la del remitente
    $headers .= "Reply-To: irina@ceatformacion.com\r\n";

    //ruta del mensaje desde origen a destino
    $headers .= "Return-path: irina@ceatformación.com\r\n";

    //direcciones que recibián copia
    //	$headers .= "Cc: direccion@dominio.com\r\n";

    //direcciones que recibirán copia oculta
    //	$headers .= "Bcc: direccion@dominio.com,direccion@dominio.com\r\n";

    mail($destinatario,$asunto,$cuerpo,$headers)
?>
<h1>Registro de prueba</h1>
<h3 style="margin-left: 10px">Gracias <?=ucfirst($nombre)?>, nos pondremos en contacto con usted</h3>
<h3 style="margin-left: 10px">En breves recibirás un email a <a href="mailto:<?=$email?>" target="_blank" title="Ir al
 correo"><?=$email?></a></h3>
<?php
    include 'footer.php';
?>