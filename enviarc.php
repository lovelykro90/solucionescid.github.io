<?php

    $destino="marinarechiga.c@gmail.com";
    $nombre = $_POST["Nombre"];
    $telefono = $_POST["Teléfono"];
    $correo = $_POST["Correo"];
    $mensaje = $_POST["Mensaje"];
    $pyme1 = $_POST["pyme1"];
    $pyme2 = $_POST["pyme2"];
    $pyme3 = $_POST["pyme3"];
    $logotipo = $_POST["logotipo"];
    $landing = $_POST["landing"];
    $identidad = $_POST["identidad"];
    $web = $_POST["web"];
    $aplicaciones = $_POST["aplicaciones"];
    $otros = $_POST["otros"];
    $otrosserv = $_POST["otrosserv"];
    $contenido = "Nombre:".$nombre . "\nTeléfono:" . $telefono . "\nCorreo:" . $correo . "\nMensaje:" . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:cotiza.html")
?>