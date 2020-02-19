<?php
include('conexion.php');

$idnombre = $_POST['idnombre'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];

$destinatario = "lucaslizarraga@hotmail.es";
$asunto = "contacto desde nuestra web";

$carta = "De: $idnombre \n";
$carta .= "Correo: $mail \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Comentario: $comentario";

$resultado =mysqli_query($conexion, "INSERT INTO comentarios (idnombre,telefono,mail,comentario) VALUES
('$idnombre','$telefono','$mail','$comentario')");

mail($destinatario, $asunto, $carta);
header('location:mensaje-de-envio.html')


?>