<?php
  $destino= "cosmos.traning@gmail.com"
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"]
  $contenido = "Nombre:" . $nombre . "/nCorreo:" . $correo . "/nTelefono:" . $telefono . "/nMensaje:" . $mensaje;
  mail($destino,"contacto",$contenido);
  header("location:HRACIAS.html") 


?>