<?php 
#ini_set( 'display_errors', 1 );
#error_reporting( E_ALL );
$nombre = $_POST['name'];
$mail = $_POST['email'];
$mail2 = 'epet3mobera@gmail.com';
$subject = $_POST['subject'];
$empresa = $_POST['message'];

$header = 'from: '.$mail2."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "Este mensaje fue enviado por: ".$nombre."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .= "asusnto: ".$subject."\r\n";
$message .= "mensaje: ".$_POST['message']."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'epet3mobera@gmail.com';
$asunto = 'mensaje de www.epet3obera.edu.ar';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado correctamente');</script>";
echo "<script type='text/javascript'>window.location.href='index.html';</script>";
 ?>
 