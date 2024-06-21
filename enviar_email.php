<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    

    $destinatario = "cristianninotti03@gmail.com";
    
    $asunto = "Nuevo mensaje de contacto desde el formulario";
    
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    $cabeceras = "From: $email\r\n";
    $cabeceras .= "Reply-To: $email\r\n";
    
    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpoMensaje, $cabeceras)) {
        echo "¡El mensaje ha sido enviado!";
    } else {
        echo "Hubo un problema al enviar el mensaje.";
    }
} else {
    // Si no es una solicitud POST, redirige o muestra un mensaje de error
    echo "Acceso no permitido";
}
?>
