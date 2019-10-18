<?php

    $destino="marinarechiga.c@gmail.com";
    $nombre = $_POST["Nombre"];
    $telefono = $_POST["Teléfono"];
    $correo = $_POST["Correo"];
    $mensaje = $_POST["Mensaje"];
    $contenido = "Nombre:".$nombre . "\nTeléfono:" . $telefono . "\nCorreo:" . $correo . "\nMensaje:" . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:index.html")
?>
