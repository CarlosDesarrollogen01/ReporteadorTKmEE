<?php
/***************************************************************************************
 * 
 *         Fecha: 29/Diciembre/2014
 *       Empresa: TKmE
 *   Programador: Carlos Hernández Álvarez
 *
 *   Descripción: Envio automático de correo con seguridad ssl
 *
 ***************************************************************************************/

session_start();

$parm_Destinatarios = $argv[1];       
$parm_CuerpoCorreo = $argv[2];
    
$_SESSION['CUERPO'] = $parm_CuerpoCorreo;


$a_Destinatarios = split(',',$parm_Destinatarios);

header('Content-Type: text/html; charset=UTF-8'); 
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';
require 'Configuracion.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = $SERVIDOR;
$mail->Port = $PUERTO;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = $CORREO_EMISOR;
$mail->Password = $CORREO_EMISOR_CLAVE;

$mail->setFrom($CORREO_EMISOR, $CORREO_EMISOR_NOMBRE);
$mail->CharSet = 'UTF­8';


for($i=0;$i<count($a_Destinatarios);$i++)
    $mail->addAddress($a_Destinatarios[$i]);

$mail->Subject = $ASUNTO;

//$mail->AddAttachment('Configuracion.php', 'Configuracion.php'); 
//$mail->AddEmbeddedImage('tkme_logo.png','imagen.png');
$mail->msgHTML($PLANTILLA_HTML);
$mail->IsHTML(true);
//$mail->AddEmbeddedImage('tkme_logo.png', 'tkme_logo.png'); 
//$mail->AddEmbeddedImage("tkme_logo.png", "my-attach", "tkme_logo.png", "base64", "image/png");

if(!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
