<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Dirección de correo electrónico a donde se enviará el mensaje
    $destinatario = "kaicompany1.0@gmail.com"; // Cambia esto a tu correo electrónico

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto desde el sitio web";

    // Contenido del mensaje
    $contenido = "
    Nombre: $nombre
    Correo Electrónico: $email
    Mensaje: $mensaje
    ";

    // Cabeceras del correo (para evitar que sea marcado como spam)
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($destinatario, $asunto, $contenido, $headers)) {
        echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, intenta nuevamente.";
    }
}
?>