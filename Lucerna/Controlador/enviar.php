<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['user_name'];
    $correo = $_POST['user_mail'];
    $mensaje = $_POST['user_message'];

    $destino = "puchatodoexiste@gmail.com";
    $asunto = "Mensaje de contacto desde Lucerna";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo: $correo\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    $headers = "From: $correo";

    mail($destino, $asunto, $contenido, $headers);

    echo "Mensaje enviado correctamente";
}
?>