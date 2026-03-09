<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = strip_tags(trim($_POST['name']));
    $apellido = strip_tags(trim($_POST['surname']));
    $mail = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST['subject']));
    $mensaje_usuario = strip_tags(trim($_POST['message']));

    $para = 'jonakazan@gmail.com';
    $asunto = 'Nuevo mensaje de la Web: ' . $subject;

    // IMPORTANTE: El "From" debe ser una cuenta del servidor o una genérica para evitar spam.
    // Gmail suele bloquear si el "From" y el "To" son iguales o si el From es el del cliente.
    $form_email = "no-reply@añosluz.ar";

    $header = "From: Años Luz Web <$form_email>\r\n";
    $header .= "Reply-To: $mail\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $header .= "X-Mailer: PHP/" . phpversion();

    $cuerpo = "Has recibido un nuevo mensaje desde el formulario de contacto:\r\n\r\n";
    $cuerpo .= "Nombre: " . $nombre . " " . $apellido . "\r\n";
    $cuerpo .= "E-mail: " . $mail . "\r\n";
    $cuerpo .= "Asunto: " . $subject . "\r\n\r\n";
    $cuerpo .= "Mensaje:\r\n" . $mensaje_usuario . "\r\n\r\n";
    $cuerpo .= "Enviado el: " . date('d/m/Y H:i:s');

    if (mail($para, $asunto, $cuerpo, $header)) {
        echo "OK";
    } else {
        echo "Error al enviar el mensaje. Verifica la configuración del servidor.";
    }
} else {
    echo "Acceso denegado.";
}
?>