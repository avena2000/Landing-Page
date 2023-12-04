<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    // Procesar el formulario y enviar correo de confirmación
    $destinatario = "medinaroger679@gmail.com";
    $asunto = "Confirmación de Registro";
    $mensaje = "Hola $nombre, gracias por registrarte.";

    // Utiliza la función mail para enviar el correo
    mail($correo, $asunto, $mensaje);

    // Puedes redirigir a una página de confirmación si lo deseas
    header("Location: https://webpages.center/clínica-veterinaria-duarte");
    exit();
}
?> 