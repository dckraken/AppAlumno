<?php
	$destino= "";
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$tel = $_POST["tel"];
	$informes= $_POST ["informes"];
	$comentarios = $_POST ["comentarios"];
	$contenido = "Nombre: " . $nombre . "<br>Email: " . $email . "<br>Tel: " . $tel . "<br>informes: " . $informes . "<br>comentarios " . $comentarios";
	mail($destino,"", $contenido);
	header("Location: tnks.hmtl");

?>